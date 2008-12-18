<script type="text/javascript">
YUI(<?php echo($yuiConfig); ?>).use(<?php echo($requiredModules); ?>,function (Y) {
    
    //get subcookie values
    var name = Y.Cookie.getSub("example", "name");
    var today = Y.Cookie.getSub("example", "today", function(value){
        return new Date(value);
    });
    var count = Y.Cookie.getSub("example", "count", Number);

    alert("The subcookie 'name' is '" + name + "'(" + (typeof name) + ")");
    alert("The subcookie 'today' is '" + today + "'(" + (typeof today) + ")");
    alert("The subcookie 'count' is '" + count + "'(" + (typeof count) + ")");
       
    //set subcookie values
    Y.Cookie.setSub("example", "name", "Yahoo!");
    Y.Cookie.setSub("example", "today", (new Date()).toString());
    Y.Cookie.setSub("example", "count", Math.round(Math.random() * 30));

});
</script>