
(function($){
    
    $(function(){
        console.log("initiated app");
        
        window.model = kendo.observable({
            referer: window.referer,
            title: "",
            name: "",
            city: "",
            phone: "",
            messageSent: false,
            commit: function(e){
                console.log("form commited", e);
                var form=$(e.target).parents(".form");
                var errors=false;
                var input;
                var template=kendo.template($("#template-message").html());
                if (errors=(window.model.name=="")||(window.model.name.length>30)){
                    input = form.find("input.input.person");
                    input.after(template({text:input.attr("validationMessage")}))
                        .addClass("errors")
                        .focus();
                };
                if ((!errors) && (errors = (window.model.city=="")||(window.model.city.length>30))){
                    input = form.find("input.input.globe");
                    input.after(template({text:input.attr("validationMessage")}))
                        .addClass("errors")
                        .focus()
                };
                if ((!errors) && (errors=(window.model.phone.length !== 15))){
                    input = form.find("input.input.phone");
                    input.after(template({text:input.attr("validationMessage")}))
                        .addClass("errors")
                        .focus()
                };
                if(!errors){
                    $(".form .k-widget.k-tooltip.k-tooltip-validation").remove();
                    var button = $(e.target);
                    model.title = "Заказ пробной партии."
                    $.ajax({
                        url: "/form.php",
                        type: "post",
                        dataType: "json",
                        data: model.toJSON(),
                        success: function(out){
                            alert("Ваш заказ успешно отправлен!");
                            window.model.set("messageSent", true);
                            $("button.orange").removeClass("orange");
                        },
                        error: function(){
                            alert("ошибки");
                        }
                    });
                };
            },
            inputFocusIn: function(e){
                $(this).attr("data-reserve", $(this).attr("placeholder"));
                $(this).attr("placeholder", "");
            },
            inputFocusOut: function(e){
                $(this).attr("placeholder", $(this).attr("data-reserve"));
                $(".form .k-widget.k-tooltip.k-tooltip-validation").remove();
                $("input.errors").removeClass("errors");
            }
        });
        var form = $(".form");
        kendo.bind(form, window.model);
        (function(max, input){
            var length = 0;
            input.bind("input change", function(){
                length = this.value.length;
                this.maxLength = length>=max?max:100;
            });
        }(30, $("input.input.person, input.input.globe")));
        var phoneInput = $("input.input.phone");
        phoneInput.mask(phoneInput.attr("data-pattern"));
        form.find("input[type='text']")
            .focusin(model.inputFocusIn)
            .focusout(model.inputFocusOut);
    });
    
}(jQuery))

