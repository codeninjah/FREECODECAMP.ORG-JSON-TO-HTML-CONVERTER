<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
        <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>

<body>
    <script type="text/javascript">
     $( document ).ready(function() {

        $.ajax({
    dataType : 'json',
    url: 'use-the-flex-direction-property-to-make-a-row.json',
    type: 'post',
    //data: 'id=1',
    success: function(data) {
        //read json   
        console.log("Great success!");
        console.log(data);
        var a = [];

        //Loop through data
        for(var prop in data) {
            console.log(prop,data[prop]);  
            a.push(prop,data[prop]);
        }
        
        var aa = [];
        //BRA GRUND --- !!! SPARA !!!
        $.each( a, function(i,v) {
             $.each( v.split('\n'), function(index, value) {
                console.log("Value row" + index + " is " + value);
                aa.push(value);
         });
        });

        
            if(aa[1] != "<!DOCTYPE html>")
            console.log("<!DOCTYPE html>");
            else
            console.log(aa[1]);
            if(aa[2] != "<html>")
            console.log("<html>");
            else
            console.log(aa[2]);
    }

});

    });
    </script>

    TEST


    <?php
        echo "PHP FUNKAR!";
    ?>

</body>
</html>