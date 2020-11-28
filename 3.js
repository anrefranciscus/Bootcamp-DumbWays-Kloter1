 var x ;
 tampilkanDumbwaysID(x);

 
 function tampilkanDumbwaysID(x=10) {
        for (var i = 1; i < x-1; i++){
            for (var j = x; j > i; j--) {
                document.write('*');
            }

            for (var k = 1; k < i; k++){
                document.write("\xa0\xa0\xa0\xa0");
            }

            for (var l = x; l > i; l--){
              document.write('*');
            }
            document.write("<br>");
        }
        document.write("*\xa0\xa0DUMBWAYSID\xa0\xa0\xa0*<br>");
        for (var i = x-2; i > 0; i--){
            for (var j = x; j > i; j--) {
              document.write('*');
            }

            for (var k = 1; k < i; k++){
                document.write("\xa0\xa0\xa0\xa0");
            }

            for (var l = x; l > i; l--){
                document.write('*');
            }
            document.write("<br>");
        }
} 