<h1>AJAX Usage</h1>
<p id="data"></p>
<button onclick="ajaxCall()">Click to Ajax Call</button>
<script>
    function ajaxCall(){
        document.getElementById("data").innerHTML="";
        var req=new XMLHttpRequest();


        req.open("GET", "/ajax-call", true);
        req.send();

        req.onreadystatechange=function(){
            if(req.readyState == 4 && req.status==200){
                var data = JSON.parse(req.responseText);
                for(i=0; i<data.data.length;i++){
                    document.getElementById("data").innerHTML+= " " + data.data[i];
                }
            }
        };
    }
</script><?php /**PATH C:\Users\PC\proj1\travelSite\resources\views/show.blade.php ENDPATH**/ ?>