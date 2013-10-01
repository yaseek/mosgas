window.onload = function(){
    console.log("LOAD");
    $(function(){
        $("body").animate({opacity: 1}, 500);
    });
};
    


var gracias = function(){
    var win = $("<div>").actionWin({
        template: $("#template-gracias").html(),
        model: {
            close: function(){
                win.close();
            }
        }
    }).data().show(function(){
        var win = this;
        setTimeout(function(){
            win.close();
        }, 3000);
    });
};
        

(function($){
    
    $.fn.actionWin = function(options){
        var self = this;
        var TIMEOUT = 1000;
        var el = this;
        //console.log("ACTION", arguments, this);
        var data = {
            timeout: TIMEOUT,
            model: {},
            template: ""
        };
        $.extend(data, options, {
            show: function(cb){
                data.wrapper = $("<div>", {
                    css: {
                        display: "none"
                    }
                }).append(kendo.template(data.template)(data.model));
                $(document.documentElement).append(data.wrapper);
                console.log("BIND", self, data, data.model);
                kendo.bind(data.wrapper, data.model);
                
                data.wrapper.stop(true, true).fadeIn(data.timeout, function(){(cb) && (cb.call(data, data.wrapper));});
                return data;
            },
            close: function(cb){
                console.log("CLOSE", data.wrapper);
                (data.wrapper) && (data.wrapper.stop(true, true).fadeOut(data.timeout, function(){(cb) && (cb.call(data, data.wrapper));}));
            }
        });
        this._data = data;
        
        this.data = function(options){
            (options) && ($.extend(false, data, options));
            //console.log("DATA", data, options);
            return data;
        };
        
        return this;
    };
    
    $(function(){
        console.log("initiated app");
        
        setTimeout(function(){
            $(".wait-fonts").animate({opacity: 1});
        }, 500);
        
        //gracias();
        
        window.model = new Model({
            title: "Заказ пробной партии"
        });

        var form = $(".form");
        kendo.bind(form, window.model);
        window.model.open(form);
        
        //window.model.extend({}); 
        var requestModel = new Model({
                title: "Заказ звонка.",
                close: function(){
                    var win = requestCall.data();
                    win.close();
            }
        });
        console.log($("#requestcall"), requestModel);
        var requestCall = $("#requestcall").actionWin({
            timeout: 200,
            template: $("#template-request-call").html(),
            model: requestModel
        })
        .removeAttr("disabled")
        .click(function(){
            requestCall.data().show(requestModel.open);
        });
        
        var buyPacks = {
            buy_1: {
                title: "Заказать комплекты автономной газификации <br />для домов площадью до 90 кв.м",
                subject: "Заказ для дома 90 кв.м.",
                text: [
                    "В комплект входит:",
                    "- Газгольдер наземный V &mdash; 1750 л;",
                    "- Гибкое соединение TracPipe - 5 м;",
                    "- Запорная арматура и фитинги;",
                    "Цена комплекта &mdash; от 115 000 руб.",
                    "Время монтажа &mdash; до 6 часов."
                ].join("<br />"),
                boldtext: [
                    "Ваша прибыль от 30 000 руб.",
                    "на каждом установленном комплекте"
                ].join("<br />"),
                img: '<img src="/img/small_house.png">'
            },
            buy_2: {
                title: "Заказать комплекты автономной газификации <br />для домов площадью от 90 до 140 кв.м",
                subject: "Заказ для дома 140 кв.м.",
                text: [
                    "В комплект входит:",
                    "- Газгольдер наземный V &mdash; 1750 л;",
                    "- Гибкое соединение TracPipe - 5 м;",
                    "- Запорная арматура и фитинги;",
                    "Цена комплекта &mdash; от 155 000 руб.",
                    "Время монтажа &mdash; до 6 часов."
                ].join("<br />"),
                boldtext: [
                    "Ваша прибыль от 40 000 руб.",
                    "на каждом установленном комплекте"
                ].join("<br />"),
                img: '<img src="/img/medium_house.png">'
            },
            buy_3: {
                title: "Заказать комплекты автономной газификации <br />для домов площадью от 140 до 250 кв.м",
                subject: "Заказ для дома 250 кв.м.",
                text: [
                    "В комплект входит:",
                    "- Газгольдер подземный V &mdash; 4700 л;",
                    "- Гибкое соединение TracPipe - 5 м;",
                    "- Запорная арматура и фитинги;",
                    "Цена комплекта &mdash; от 210 000 руб.",
                    "Время монтажа &mdash; до 2 суток.",
                    "(с учётом земляных работ)"
                ].join("<br />"),
                boldtext: [
                    "Ваша прибыль от 50 000 руб.",
                    "на каждом установленном комплекте"
                ].join("<br />"),
                img: '<img src="/img/big_house.png">'
            }
        };
        for(var i in buyPacks) {
            (function(button){
                //console.log(button);
                var buyModel = new Model({
                    title_win: buyPacks[i].title,
                    title: buyPacks[i].subject,
                    text: buyPacks[i].text,
                    boldtext: buyPacks[i].boldtext,
                    img: buyPacks[i].img,
                    close: function(){
                        button.data().close();
                    }
                });
                button.actionWin({
                    timeout: 200,
                    template: kendo.template($("#template-request-buy").html())(buyPacks[i]),
                    model: buyModel
                })
                .removeAttr("disabled")
                .click(function(){
                    var data = button.data();
                    //console.log("CLICK", this, button, data)
                    data.show(buyModel.open);
                });
            }($("#"+i)));
        };
    });
    
}(jQuery))

