<script type="text/javascript">
    window.addEventListener("load", function(){
        setTimeout(
            function open(event){
                document.querySelector(".popup1").style.display = "block";
            },
            3000 
        )
    });
    
    
    document.querySelector("#close").addEventListener("click", function(){
        document.querySelector(".popup1").style.display = "none";
    });
</script>