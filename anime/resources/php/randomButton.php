<?php
    $conn = new mysqli('localhost','root','123456','Website');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    $sql = "SELECT COUNT(*) FROM Anime;";
    $query = mysqli_query($conn,$sql);
    while($totalCount=mysqli_fetch_array($query,MYSQLI_ASSOC)){
?>

<script>
        const totalCount = <?php echo json_encode($totalCount, JSON_HEX_TAG); ?>; 
</script>  

<?php
    }
    $conn->close();
?>
<script>
    function randomInt(min, max) { // min and max included 
        return Math.floor(Math.random() * (max - min + 1) + min)
    }
    const randomBtn = document.getElementById("randomBtn");
    randomBtn.addEventListener('click', (e) => {
        location.href = "/test/xakashic/anime/review.php?anime="+randomInt(1,parseInt(totalCount['COUNT(*)']));
    });
    
</script>