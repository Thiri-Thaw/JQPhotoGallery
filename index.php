<!DOCTYPE html>
<html>

    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/filter.js"></script>
    </head>

    <body>
        <div id="header">
            <div id="menu">
                <h2>JQuery Photo Gallery</h2>
                <input id="search" style="float:right" type="text" placeholder="search">
            </div>
        </div>
        <div id="overlay"></div>
        <div id="frame">
            <table id="frame-table">
                <tr>
                    <td id="left">
                        <img class="icon" src="images/left.png" alt="left">
                    </td>
                    <td id="right">
                        <img class="icon" src="images/right.png" alt="">
                    </td>
                </tr>
            </table>
            <img id="main" src="" alt="">
            <div id="description">
                <p></p>
            </div>
        </div>
        <div id="wrapper">
            <div id="filter">
                <button class="active" data-filter="all">All</button>
                <button data-filter="nature">Nature</button>
                <button data-filter="art">Art</button>
                <!-- <button data-filter="creation">Creation</button> -->
                <button data-filter="building">Building</button>
                <button data-filter="flower">Flower</button>
            </div>
            <ul id="portfolio">
                <?php include_once("list.html")?>
            </ul>
        </div>

    </body>

</html>