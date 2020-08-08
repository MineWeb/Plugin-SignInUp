<?php

Router::connect('/login', ['controller' => 'login', 'action' => 'index', 'plugin' => 'signInUp']);
Router::connect('/register', ['controller' => 'register', 'action' => 'index', 'plugin' => 'signInUp']);
Router::connect('/lostpassword', ['controller' => 'lostPassword', 'action' => 'index', 'plugin' => 'signInUp']);