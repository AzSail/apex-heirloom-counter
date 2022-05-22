<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> heirloom counter </title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.min.js"></script>
        <link href="https://fonts.loli.net/css?family=Noto+Serif+SC" rel="stylesheet">
        <script>
            $(document).ready(function(){
                $("div#int").hide();
                $("button#inctro").click(function(){$("div#int").toggle()});
                $("button#once").click(function(){
                    $("#snap").load("function.php?snap=1").fadeToggle("fast").fadeToggle("fast");
                });
                $("button#minus").click(function(){
                    $("#snap").load("function.php?snap=-1").fadeToggle("fast").fadeToggle("fast");
                });
                $("button#clear").click(function(){
                    $("#snap").load("function.php?snap=-2").fadeToggle("fast").fadeToggle("fast");
                });
                $("button#add").click(function(){
                    $("#snap").load("function.php?add="+$("input#add").val()).fadeToggle("fast").fadeToggle("fast");
                    $("input#add").val("");
                });
                $("button#rs").click(function(){
                    $("#snap").load("function.php?rs="+$("input#rs").val()).fadeToggle("fast").fadeToggle("fast");
                    $("input#rs").val("");
                });
            });
        </script>
    </head>
    <body style="margin : 10px;font-family:'Noto Serif SC',serif;" align="center">
        <h1> heirloom counter </h1><hr/>
        <h3> Num: <span id="snap" style="color:#4d866e;"><?php require'function.php';?></span> </h3><br/>
        <button class="btn btn-default" id="once" style="outline:none">+1</button>
        <button class="btn btn-default" id="minus" style="outline:none">-1</button>
        <button class="btn btn-default" id="clear" style="outline:none">clear</button>
        <br/><br/>
        <div class="form-inline">
            <div class="input-group col-xs-1">
                <input type="text" class="form-control" placeholder="num" id="add">
            </div>
            <button class="btn btn-default" id="add" style="outline:none">add</button>
        </div>
        <br/>
        <div class="form-inline">
            <div class="input-group col-xs-1">
                <input type="text" class="form-control" placeholder="num" id="rs">
            </div>
            <button class="btn btn-default" id="rs" style="outline:none">reset</button>
        </div>
    </body>
</html>