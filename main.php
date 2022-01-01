<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://unpkg.com/vue@next"></script>
    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="test">
        <div class="messages">
            <?php while($messg=$stmt2->fetch()) {?>
            <ul>
                <li><?=$messg['msg'];?></li>
            </ul>
            <?php }?>
            <ul v-for="message in data">
            <li>{{message}}</li>
            </ul>
        </div>
        <form method="post" enctype="multipart/form-data">
            <textarea type="text" name="msg"  v-model="newMessage"></textarea>
            <input type="submit" @click="push" :disabled="newMessage.length===0 || newMessage.length>=1000">
        </form>
    </div>
    <script src='js.js'></script>
</body>
</html>