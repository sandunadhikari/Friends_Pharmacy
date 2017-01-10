
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="public/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            .container-1{
                width: 300px;
                vertical-align: middle;
                white-space: nowrap;
                position: relative;

            }
            .container-1 input#search{
                width: 300px;
                height: 50px;
                background: #2b303b;
                border: none;
                font-size: 10pt;
                float: left;
                color: #63717f;
                padding-left: 45px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }
            .container-1 .icon{
                position: absolute;
                top: 50%;
                margin-left: 17px;
                margin-top: 17px;
                z-index: 1;
                color: #4f5b66;
            }
            .container-1 input#search::-webkit-input-placeholder {
                color: #65737e;
            }

            .container-1 input#search:-moz-placeholder { /* Firefox 18- */
                color: #65737e;  
            }

            .container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
                color: #65737e;  
            }

            .container-1 input#search:-ms-input-placeholder {  
                color: #65737e;  
            }
            .container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
                outline:none;
                background: #ffff60;
            }
            

            .box{
                margin: 100px auto;
                width: 300px;
                height: 50px;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <div class="container-1">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Search..." />
            </div>
        </div>
    </body>
</html>
