/* 
   pour passer ce fichier
   en ligne de commande dans le répertoire où se trouve ce fichier
    mysql -u USERNAME -pPASSWORD -h VALEUR_DB_HOST_CONFIG qel <  patch-sql-mission5.sql
    mysql -u root -p*T@PH2tRa8l qel < patch-sql-mission5.sql
*/

/* on ajoute une colonne dans la table questionnaire 
    elle s'appelle visibilite
        elle peut prendre les valeurs toujours|apresreponse|apresfin
        elle est insérée après la colonne titre
        elle a pour valeur par défaut toujours
*/
ALTER TABLE questionnaire 
    ADD COLUMN visibilite VARCHAR(16) NOT NULL DEFAULT "toujours" AFTER titre;


/* On met à jour la table pour que tous les formulaires existants soient visibilite=toujours*/

UPDATE questionnaire SET visibilite="toujours";