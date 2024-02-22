=== PHP-XML ===
Problème "DOM" avec PHP perturbant le chargement des XMLs
Solution = sudo apt install php-xml

========================================================
=== ADMINER ==
Problème bug adminer sur serveur
Solution: sudo apt install php-mysql

===================================================

Problème droit
Solution: Vérifier droit , faire CHMOD -R 777 et CHOWN -R www-data:www-data sur le dossier du projet, ne pas oublier de vider le cache (php bin/console c:c) et relancer (reload Apache)
