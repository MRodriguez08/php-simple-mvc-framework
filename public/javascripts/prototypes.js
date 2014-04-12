
/*______________DATE______________*/

Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});

/*______________STRING______________*/
String.prototype.longToDateTime = (function(){
    function pad(s) { return (s < 10) ? '0' + s : s; }
    var d = new Date(this);
    return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/');
})

String.prototype.echo = (function(){
    return this;
})