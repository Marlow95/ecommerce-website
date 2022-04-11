<?php

function renderHeader($home, $about){
   return (
        '<ul>
            <li>
                <a href="'.$home.'">Home</a>
            </li>

            <li>
            <a href="'.$about.'">About</a>
            </li>

        </ul>'
    );

}
