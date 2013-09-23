
var Model;

(function($){
    
    $(function(){
        Model = kendo.data.ObservableObject.extend({
            name: "",
            city: "",
            phone: "",
            messageSent: false,
            close: function(){
        
            },
            commit: function(e){
                var model = this;
                model.set("referer", window.referer);
                console.log("form commited", model, model.toJSON());
                var form=$(e.target).parents(".form");
                var errors=false;
                var input;
                var template=kendo.template($("#template-message").html());
                if (errors=(this.name=="")||(this.name.length>30)){
                    input = form.find("input.input.person");
                    input.after(template({text:input.attr("validationMessage")}))
                        .addClass("errors")
                        .focus();
                };
                if ((!errors) && (errors = (this.city=="")||(this.city.length>30))){
                    input = form.find("input.input.globe");
                    input.after(template({text:input.attr("validationMessage")}))
                        .addClass("errors")
                        .focus()
                };
                if ((!errors) && (errors=(this.phone.length == ""))){
                    input = form.find("input.input.phone");
                    input.after(template({text:input.attr("validationMessage")}))
                        .addClass("errors")
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
                            //console.log("Ваш заказ успешно отправлен!", this);
                            gracias();
                            model.set("messageSent", true);
                            $("button.orange").removeClass("orange").attr("disabled", "disabled");
                            model.close();
                        },
                        error: function(){
                            alert("ошибки");
                        }
                    });
                };
            },
            open: function(wrapper){
                (function(max, input){
                    var length = 0;
                    input.bind("input change", function(){
                        length = this.value.length;
                        this.maxLength = length>=max?max:100;
                    });
                }(30, wrapper.find("input.input.person, input.input.globe")));
                var phoneInput = wrapper.find("input.input.phone");
                phoneInput.mask(phoneInput.attr("data-pattern"));
                wrapper.find("input[type='text']")
                    .focusin(function(){
                        $(this).attr("data-reserve", $(this).attr("placeholder"));
                        $(this).attr("placeholder", "");
                    })
                    .focusout(function(){
                        $(this).attr("placeholder", $(this).attr("data-reserve"));
                        wrapper.find(".k-widget.k-tooltip.k-tooltip-validation").remove();
                        wrapper.find("input.errors").removeClass("errors");
                    });
            }
        });
    });
    
}(jQuery));

