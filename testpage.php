<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>btn- Ref: btn-001</title>
    <style>
html,body {
  padding:0;
  margin:0;
  width:100%;
  height:100%;
}

#wrapper {
  display: table;
  width:100%;
  height:100%;
}

#wrapper-inner {
  display: table-cell;
  vertical-align:middle;
  width:100%;
  height:100%;
}

#scroll-down {
    display: block;
    position: relative;
    padding-top: 79px;
  text-align:center;
}
.arrow-down {
    display: block;
    margin: 0 auto;
    width: 10px;
    height: 38px;
}
.arrow-down:after {
    content: '';
    display: block;
    margin: 0;
    padding: 0;
    width: 8px;
    height: 8px;
    border-top: 2px solid #b91a2f;
    border-right: 2px solid #b91a2f;
    behavior: url(-ms-transform.htc);
    -moz-transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    -o-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg);
}
#scroll-title {
    display: block;
    text-transform: uppercase;
    color: #b91a2f;
  font-family: Helvetica Neue, Helvetica, Arial;
  font-size:14px;
  font-weight:bold;
  letter-spacing:.1em;
}
#scroll-down::before {
    -webkit-animation: elasticus 1.2s cubic-bezier(1, 0, 0, 1) infinite;
    /* Safari 4+ */
    
    -moz-animation: elasticus 1.2s cubic-bezier(1, 0, 0, 1) infinite;
    /* Fx 5+ */
    
    -o-animation: elasticus 1.2s cubic-bezier(1, 0, 0, 1) infinite;
    /* Opera 12+ */
    
    animation: elasticus 1.2s cubic-bezier(1, 0, 0, 1) infinite;
    /* IE 10+, Fx 29+ */
    
    position: absolute;
    top: 0px;
    left: 50%;
    margin-left: -1px;
    width: 2px;
    height: 90px;
    background: #b91a2f;
    content: ' ';
}
@-webkit-keyframes elasticus {
    0% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
    50% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    50.1% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    100% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
}
@-moz-keyframes elasticus {
    0% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
    50% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    50.1% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    100% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
}
@-o-keyframes elasticus {
    0% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
    50% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    50.1% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    100% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
}
@keyframes elasticus {
    0% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
    50% {
        -webkit-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    50.1% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    100% {
        -webkit-transform-origin: 0% 100%;
        -ms-transform-origin: 0% 100%;
        -moz-transform-origin: 0% 100%;
        -o-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: scale(1, 0);
        -ms-transform: scale(1, 0);
        -moz-transform: scale(1, 0);
        -o-transform: scale(1, 0);
        transform: scale(1, 0);
    }
}



// codepen profile logo
#paschka {
  display: block;
  color:white;
  font-family:helvetica neue, helvetica, arial;
  font-size:32px;
  text-decoration: none;
  position: fixed;
  bottom:0px;
  right:0px;
  padding:0px;
  transition: all .1s ease;
  background:#000;
  height:40px;
  line-height:30px;
  vertical-align:middle;
  width:40px;
  text-align:center;
  border-radius: 5%;
  bottom:20px;
  right:20px;
  
  &:hover {
    background:#232323;
    transition:all .1s ease;
    color:#f0f0f0;
  }
}

    </style>
</head>
<body>
   <h2>Call to action</h2>
   <div id="wrapper">
        <div id="wrapper-inner">
        <div id="scroll-down">
        <span class="arrow-down">
        <!-- css generated icon -->
        </span>
        <span id="scroll-title">
            Scroll down
        </span>
        </div>
        </div>
        </div>
</body>
</html>