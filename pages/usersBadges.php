<?php
// login("jean@coucou.be", "coucou")
?>


<body>
    <div class="usersList_container">
        <div class="usersList_title">
            <h2 class="users_title">Users list</h2>
        </div>     
    </div>
    <div class="badges_container">
        <div class="addUser_button">
            <a class="addUser_link" href="./addUsers.php">Add User</a>
        </div>
        <div class="badges_menus">
            <div class="users_menu">
                <label for="">Choise the user</label>
                <select name="user" id="user_select">
                    <option value=""></option>
                </select>
            </div>
            <div class="badges_menu">
                <label for="">Choise the badge</label>
                <select name="badge" id="badge_select">
                    <option value=""></option>
                </select>
            </div>
        </div> 
        <div class="badges_buttons">
            <div class="+">
                <button type="" alt="" class="+_button"></button>
            </div>
            <div class="-">
                <button type="" alt="" class="-_button"></button>
            </div>
        </div>
    </div>
