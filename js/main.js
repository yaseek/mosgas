
(function($){
    
    $(function(){
        console.log("initiated app");
        
        window.model = kendo.observable({
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
                if (errors=(window.model.name=="")){
                    input = form.find(".input.person input");
                    input.after(template({text:input.attr("validationMessage")}))
                        .focus();
                };
                if ((!errors) && (errors = (window.model.city==""))){
                    input = form.find(".input.globe input");
                    input.after(template({text:input.attr("validationMessage")}))
                        .focus()
                };
                if ((!errors) && (errors=(window.model.phone.length !== 10))){
                    input = form.find(".input.phone input");
                    input.after(template({text:input.attr("validationMessage")}))
                        .focus()
                };
                if(!errors){
                    $(".form .k-widget.k-tooltip.k-tooltip-validation").remove();
                    var button = $(e.target);
                    $.ajax({
                        url: "/form.php",
                        type: "post",
                        dataType: "json",
                        data: model.toJSON(),
                        success: function(out){
                            alert("Ваш заказ успешно отправлен!");
                            window.model.set("messageSent", true);
                            $(button).removeClass("orange");
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
            }
        });
        var form = $(".form");
        kendo.bind(form, window.model);
        form.find("input[type='text']")
            .focusin(model.inputFocusIn)
            .focusout(model.inputFocusOut);
    });
    
}(jQuery))

