<?php
if (!empty($_SESSION['alert'])) {
    foreach ($_SESSION['alert'] as $alert) {
        echo "<div class='alert " . $alert['type'] . "' role='alert'>
                        " . $alert['message'] . "
                    </div><style>.alert{display: flex;
                        justify-content: center; align-items: center;
                        background: linear-gradient(yellow,red);
                        font-size: 15px;margin:0.625rem; color: black}</style>";
    }
    unset($_SESSION['alert']);
}
?>