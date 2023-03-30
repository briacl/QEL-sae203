/* 
   pour passer ce fichier
   en ligne de commande dans le répertoire où se trouve ce fichier
    mysql -u USERNAME -pPASSWORD -h VALEUR_DB_HOST_CONFIG qel <  patch-sql-mission6.sql
    mysql -u root -p*T@PH2tRa8l qel < patch-sql-mission6.sql
*/

/* on ajoute une colonne dans la table question 
    elle s'appelle ouverte 
        c'est un booléen TRUE/FALSE
        elle est insérée après la colonne question
        elle a pour valeur par défaut false
        elle ne peut être nulle
*/
ALTER TABLE question 
    ADD COLUMN ouverte BOOLEAN NOT NULL DEFAULT FALSE AFTER question;


/* On met à jour la table pour que tous les formulaires existants soient visibilite=toujours*/

UPDATE question SET ouverte = FALSE;