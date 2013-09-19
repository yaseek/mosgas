
(function($){
    
    $(function(){
        console.log("initiated app");
        
        window.model = kendo.observable({
            name: "",
            city: "",
            phone: "",
            commit: function(){
                console.log("form commited", model.toJSON());
                $.ajax({
                    url: "/form.php",
                    type: "post",
                    dataType: "json",
                    data: model.toJSON(),
                    success: function(out){
                        alert("Подтверждение формы");
                    },
                    error: function(){
                        alert("ошибки");
                    }
                });
            },
            inputFocusIn: function(e){
                $(this).attr("data-reserve", $(this).attr("placeholder"));
                $(this).attr("placeholder", "");
            },
            inputFocusOut: function(e){
                $(this).attr("placeholder", $(this).attr("data-reserve"));
            }
        });
        var form = $(".form");
        kendo.bind(form, window.model);
        form.find("input[type='text']")
            .focusin(model.inputFocusIn)
            .focusout(model.inputFocusOut);
    });
    
}(jQuery))

