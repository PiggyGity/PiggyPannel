<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        ddtankAlpha - Tela de jogo
    </title>
    <link rel="icon" href="https://pbs.twimg.com/profile_images/1391875988364091400/kQCNQnOV.jpg" type="image/x-icon">
    <link href="<?= base_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/playgame.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0px auto;
            padding: 0px;
            background-repeat: no-repeat;
            background-position: center center;
            overflow: auto;
            text-align: center;
            background-size: auto;
        }

        #playgane {
            position: relative;
            cursor: pointer;
            width: 1000px;
            height: 600px;
            overflow: hidden;
        }

        #kt_header {
            position: absolute !important;
            width: 100% !important;
            height: 48px !important;
            background-color: #ffffff !important;
        }

        #kt_drawer_chat_toggle {
            display: none;
        }
    </style>
</head>

<body>
    <?php include 'default/header_game.php'; ?>
    <div class="geral" style="width: 100%; height: 100%;">
        <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
            <td valign="middle">
                <table border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center">
                            <div id="playgame">
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </table>
    </div>

    <script type="text/javascript">
        $.ajax({
            type: 'GET',
            url: '<?= base_url('LoginGame.ashx') ?>',
            data: "username=<?= $udata->u_hash; ?>&password=<?= $udata->p_hash; ?>",
            success: function(data) {
                const url = data;
                const foo = new URL(url);
                const search = Object.fromEntries(Array(...foo.searchParams.entries()));

                $("#playgame").html(`
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" class=i d="7road-ddt-game" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" name="Main" id="Main">
                        <param name="allowScriptAccess" value="always" />
                        <param name="movie" value="https://www.ddtankalpha.com.br/flash/Loading.swf?user=${search['user']}&key=${search['key']}&config=https://www.ddtankalpha.com.br/config.xml" />
                        <param name="quality" value="high" />
                        <param name="menu" value="false">
                        <param name="bgcolor" value="#000000" />
                        <param name="FlashVars" value="editby=" />
                        <param name="allowScriptAccess" value="always" />
                        <embed flashvars="editby=" src="https://www.ddtankalpha.com.br/flash/Loading.swf?user=${search['user']}&key=${search['key']}&config=https://www.ddtankalpha.com.br/config.xml"
                            width="1000" height="600" align="middle" quality="high" name="Main" allowscriptaccess="always"
                            type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                    </object>
            `);
            }

        });
    </script>

    <script type="text/javascript">
        window.onbeforeunload = function(e) {
            return 'O ddtankAlpha está prestes a ser fechado, tem certeza?';
        };
    </script>
    <script src="<?= base_url() ?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/js/scripts.bundle.js"></script>
    <script>function HealthCheck() {$.ajax({method: "GET",url: "<?= $r->route('web.check.state') ?>",})}setInterval(HealthCheck, 5000);</script>
</body>