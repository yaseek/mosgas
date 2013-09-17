
(function($){
    
    $(function(){
        console.log("initiated app");
        
        var model = kendo.observable({
            name: "",
            city: "",
            phone: "",
            commit: function(){
                console.log("form commited", model.toJSON());
                alert("Подтверждение формы");
            }
        });
        kendo.bind($(".form"), model);
        
    });
    
}(jQuery))

