<?php
echo "<h2>GIT CMD käsud</h2>";
echo "<ul>";
echo "<li>git init uus repo</li>";
echo '<li> git init - uus repo
git config --global user.name "[nimi]"
<br>
git config --global user.email "[email]"<br>
git config --global --list<br>
<li>

//ssh võti loomine
 ssh-keygen -o -t rsa -C "[email]"<br>
 //võti salvestatakse opilane/.ssh kausta<br>
 //id_rsa.pub tuleb kopeeerida oma git hub -reposse<br>
 </li>
 <li>
 git add .<br>
 git commit -a -m "on loodud phpIndex"<br>
 git remote remove origin
</li>
<br>
<li>
git remote add origin git@github.com:Nauter1/phpIndexTARpe24KP.git<br>
git branch -M main<br>
git push -u origin main</li>';
echo "</ul>";
