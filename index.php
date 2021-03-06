<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="null.png" /> 
    
    <title>Favicon.ico远程获取API</title>
    <style>
    * {margin:0;padding:0;font-size:14px;font-family:'Microsoft Yahei','微软雅黑',Tahoma,Arial,Helvetica,STHeiti;}
    
    a,img {border:0;}
    
    a {color:#666;text-decoration:none;word-wrap: break-word;word-break: normal;}
    a:hover {text-decoration: underline;color: #03B3B2;}
    
    .container{
        max-width: 1000px;
        margin: 20px auto;
        padding: 0 5px;
    }
    .container p{
        color: #444;
        margin-bottom: 5px;
    }
    .container ul{
        margin-bottom: 5px;
        padding-left: 25px;
    }
    .container ul li{
        color: #444;
        margin-bottom: 3px;
    }
    .container h1{
        color: #45B6F7;
        font-size: 25px;
        font-weight: 400;
        margin: 20px 0;
    }
    .container h2{
        font-size: 18px;
        font-weight: 400;
        margin: 20px 0 15px 0;
    }
    /*演示图标*/
    .demo{
        display: inline-block;
        list-style:none;
    }
    .demo li {
        float: left;
        width: 116px;
        overflow: hidden;
        text-align: left;
    }
    .demo li a {
        font-size: 14px;
        width: 116px;
        height: 38px;
        line-height: 38px;
        display: block;
        padding-left: 0px;
        margin-left: 10px;
    }
    .demo li a img {
        width: 16px;
        height: 16px;
        float: left;
        padding-top: 10px;
    }
    .demo li a em {
        float:left;
        font-style:normal;
        font-size:14px;
        padding-left:4px;
    }
    .demo li a em:hover {
        text-decoration: underline;
    }
    
    /*代码调用*/
    .codes{
        margin:15px 0;
        padding:10px 12px;
        border:#ccc 1px solid;
        border-left-width:4px;
        background-color:#fefefe;
        box-shadow:0 0 4px #eee;
        word-break:break-all;
        word-wrap:break-word;
        color:#444;
        max-width: 600px;
        overflow-x: auto;
    }
    /*底部版权链接*/
    .copyright{
        color:#666;
        text-align: center;
        font-size: 12px;
        margin-top: 30px;
    }
    </style>
</head>

<body>

<div class="container">
    <h1>Favicon.ico远程获取API</h1>

    <h2>API说明：</h2>
    <p>远程实时获取并显示网站的Favicon.ico文件，美化网站外链显示效果。</p>

    <h2>API演示：</h2>

    <ul class="demo">
    <li>
        <a href="http://mkblog.cn" target="_blank">
            <img src="http://api.mkblog.cn/favicon/get.php?url=http://mkblog.cn" width="16" height="16">
            <em>孟坤博客</em>
        </a>
    </li>
    
    <li>
        <a href="http://www.smohan.net/" target="_blank">
            <img src="http://api.mkblog.cn/favicon/get.php?url=http://www.smohan.net/" width="16" height="16">
            <em>水墨寒</em>
            <!--前端界面经过压缩-->
        </a>
    </li>
    
    <li>
        <a href="http://www.12306.cn/mormhweb/" target="_blank">
            <img src="http://api.mkblog.cn/favicon/get.php?url=http://www.12306.cn/mormhweb/" width="16" height="16">
            <em>12306</em>
            <!--带有js跳转，首页无法获取-->
        </a>
    </li>
    
    <li>
        <a href="http://www.baidu.com" target="_blank">
            <img src="http://api.mkblog.cn/favicon/get.php?url=http://www.baidu.com" width="16" height="16">
            <em>百度</em>
            <!--没有ico的标签-->
        </a>
    </li>
    
    <li>
        <a href="http://mail.163.com/" target="_blank">
            <img src="http://api.mkblog.cn/favicon/get.php?url=http://mail.163.com/" width="16" height="16">
            <em>网易</em>
            <!--带有gzip压缩-->
        </a>
    </li>
    
    <li>
        <a href="https://www.wikipedia.org/" target="_blank">
            <img src="http://api.mkblog.cn/favicon/get.php?url=https://www.wikipedia.org/" width="16" height="16">
            <em>维基百科</em>
            <!--带有相对路径及https跳转-->
        </a>
    </li>
    
    <li>
        <a href="http://weibo.com/" target="_blank">
            <img src="http://api.mkblog.cn/favicon/get.php?url=http://weibo.com/" width="16" height="16">
            <em>微博</em>
            <!--带有302跳转-->
        </a>
    </li>
    
    </ul>

    <h2>API调用：</h2>

<pre class="codes">
<span style="color:#170">&lt;img</span> <span style="color:#00c">src</span>=<span style="color:#a11">"api.php?url=XXXXX"</span><span style="color:#170">&gt;</span><br><br>
//XXXXX部分为需要获取的目标网站网址 例如?url=www.baidu.com<br>
网址前面的http://可以加，也可以不加。但如果是https://头，则必须加上
</pre>

    <h2>开发说明：</h2>
    <p>Favicon.ico文件的调用方式不限于此，更多的调用方法正在研究中，以及数据存储缓存优化等方面也在改善，欢迎提出意见！</p>

    <h2>特别感谢：</h2>
    <p>[1]、 Favicon.ico远程获取API接口 <a href="http://www.5z5d.com/api/favicon.php" target="_blank">http://www.5z5d.com/api/favicon.php</a></p>
    <p>[2]、 再谈获取网站图标Icon <a href="http://www.cnblogs.com/luguo3000/p/3789669.html" target="_blank">http://www.cnblogs.com/luguo3000/p/3789669.html</a></p>
    <p>[3]、 Favicon.ico远程获取插件 php版 v1.0 <a href="http://www.jb51.net/codes/390215.html" target="_blank">http://www.jb51.net/codes/390215.html</a></p>

    
    <h2>更新记录：</h2>
    <p>v1.1 (2016/12/4)
        <ul>
            <li>完善favicon匹配正则表达式；</li>
            <li>增加对相对路径的处理；</li>
            <li>增加360导航的Api最为备用；</li>
            <li>增加对gzip页面的处理；</li>
            <li>其它代码精简及优化。</li>
        </ul>
    </p>
    <p>v1.0 初始版本，来自 <a href="http://www.5z5d.com/api/favicon.php" href="_blank">5z5d.com</a></p>

    <div class="copyright">
        <p>Copyright &copy; 2016 <a href="http://mkblog.cn" target="_blank">mkblog.cn</a></p>
    </div>

</div>  <!--class=container-->

<a href="https://github.com/mengkunsoft/phpGetFavicon">
    <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png">
</a>

</body>
</html>