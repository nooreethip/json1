<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
    <button id="btnJSON1"> JSON 1 </button>
    fname : <span id="fname"</span><br/>
    lname : <span id="lname"</span>

<body>

</body>
<script>
function loadJSON() {
    var url = "http://cj-android-demon.herokuapp.com/json2.php";
    $.getJSON(url)
         .done((data)=>{
            console.log(data);
            console.log(data[1]);
            console.log(data[2].fname);
         })
         .fail((xhr,status,err)=>{

         });
}
    $(() => {
        $("btnJSON1").click(loadJSON);

    });
</script>

</html>
