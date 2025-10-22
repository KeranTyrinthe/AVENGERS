
Vision générale

Une plateforme web + PWA (progressive web app) mobile-first qui gère l’ensemble du cycle scolaire : inscriptions, classes, emplois du temps, notes (6 périodes + 3 examens / an), bulletins automatiques, montée/échec, finances, et un portail parent individuel. Optimisée pour faible bande passante, intégration paiement mobile (Airtel Money, Orange Money), notifications SMS/USSD, impression PDF des bulletins et conformité minimale à la protection des données.


---

Rôles & droits

1. Super-Admin (délègue, multi-établissement) — tout accès, configurations globales.


2. Administrateur / Directeur d’école — gestion école, affectations, décisions promotions, validations paiements.


3. Comptable / Caissier — gestion frais, reçus, rapports financiers.


4. Chef d’établissement / Directeur pédagogique — validation des examens, statistiques académique.


5. Enseignant — saisie des notes, présence, cahier de texte, upload de ressources.


6. Parent / Tuteur — accès au suivi de son(ses) enfant(s) (bulletins, absences, messages).


7. Élève (optionnel) — accès limité à son profil, notes et devoirs.


8. Personnel administratif (secrétariat, infirmier, bibliothécaire, transport).



Chaque rôle a une granularité d’accès (lecture/écriture/validation/export).


---

Modules & fonctionnalités détaillées

1) Inscription & gestion des élèves

Formulaire d’inscription numérique (nom, né(e), lieu, tuteur, coordonnées, documents scannés).

Validation multi-étapes : pré-enregistrement → vérification par secrétariat → confirmation.

Import CSV / Excel pour mass upload d’inscriptions anciennes.

Numéro d’élève unique et QR code pour chaque élève (contrôle d’accès, imprimés).

Historique : transferts, sanctions, notes administratives.

Pièces demandées : act de naissance, certificats médicaux, photos; upload et stockage chiffré.


2) Classes, sections et effectifs

Création des niveaux (Maternelle / Primaire / Secondaire / Technique) et sections.

Gestion des capacités (max élèves par classe), listes d’attente et répartition automatique (ou manuelle) selon critères (âge, notes, sexe, quartier).

Regroupement/streaming : possibilité d’assembler classes pour certaines matières (ex. option sciences).


3) Emploi du temps & affectation des salles

Générateur d’emploi du temps: contraintes (enseignant disponible, salle, matières, maximum heures).

Version imprimable et export PDF/CSV.

Notifications automatiques pour changements d’EDT.


4) Présence et suivi (Absences)

Prise de présence quotidienne depuis mobile (enseignant) ou via QR code à l’entrée.

Justificatifs scannés (certificat médical).

Rapports d’absentéisme par élève/classe.

Alertes automatiques aux parents en cas d’absences répétées par SMS/USSD/notification.


5) Système d’évaluation (6 périodes + 3 examens)

Structure : 3 trimestres (T1,T2,T3).

Chaque trimestre a 2 périodes de contrôle continu (PC) → total 6 périodes/an.

Chaque trimestre a 1 examen terminal → total 3 examens/an.


Paramétrable : tu peux configurer poids/coefficients par matière, par type d’évaluation (PC vs examen), et règle de pondération pour calcul final.

Exemple de règle proposée (modifiable) :

Pour chaque trimestre :

Moyenne des 2 PC (P1,P2) = (P1 + P2) / 2 → pondération 40% du trimestre.

Examen trimestriel → pondération 60% du trimestre.

Moyenne du trimestre = 0.4 * Moy_PC + 0.6 * Exam_trimestre.


Moyenne annuelle = (Moy_T1 + Moy_T2 + Moy_T3) / 3.


Gestion des coefficients par matière (ex. Math coeff 4, Sport coeff 1). Calculs tiennent compte des coefficients.

Notes / barèmes : saisie en 0–20, 0–100 ou % — conversion automatique.


Exemple numérique détaillé (pour éviter toute erreur)

Supposons élève A, matière Maths, coefficients = 4. Résultats :

P1 = 12/20

P2 = 14/20

Exam T1 = 13/20


Calcul T1 :

1. Moy_PC = (12 + 14) / 2 = 26 / 2 = 13.


2. Moy_T1 = 0.4 * 13 + 0.6 * 13 = 5.2 + 7.8 = 13.0.



Répéter pour T2 et T3, ensuite : Moyenne annuelle = (Moy_T1 + Moy_T2 + Moy_T3) / 3.

Si coefficients matière = 4, lors du calcul de moyenne générale pondérée on multiplie la moyenne de la matière par 4 avant de diviser par somme des coefficients.

6) Règles de montée / redoublement (promotion)

Règles paramétrables (par niveau) ; proposition par défaut :

Seuil de passage : moyenne générale annuelle ≥ 10/20 ⇒ promotion.

Matières éliminatoires : si moyenne en maths ou langue principale < 6 ⇒ examen de rattrapage ou échec selon personnel pédagogique.

Rattrapage : proposition d’épreuves de rattrapage post-trimestre pour élèves en zone de flou (entre 8 et 9.9).

Décision finale : validée par Directeur pédagogique.


Exposé clair dans l’interface : pour chaque élève, affichage “Risque d’échec”, critères manquants, actions recommandées.


7) Bulletins & documents officiels

Génération automatique de bulletins trimestriels et annuel (PDF haute qualité, imprimable).

Contenu : notes par matière, moyennes, appréciations automatiques + champ libre pour remarques prof, présence, comportement, signature du directeur.

Paramètres d’impression (A4 portrait/paysage), logo, entête de l’école, QR code pour vérification.

Envoi automatique par email ou mise à disposition sur portail parent. Option : impression centralisée et distribution à l’école.


8) Portail Parent (chaque parent sa plateforme)

Inscription unique liée à l’élève(s).

Interface mobile-first : consultation bulletins, absences, notes, calendriers, messages enseignants, factures, reçus.

Notifications : SMS / push / email pour bulletins disponibles, paiements, absences.

Paiement en ligne : intégration avec Airtel Money & Orange Money, et paiement par Mobile Money local (CDF) ; historique des paiements, reçus PDF téléchargeables.

Accès sécurisé : comptes liés par numéro de téléphone + code PIN, possibilité d’accès sans smartphone via SMS/USSD pour certaines infos.


9) Finances & facturation

Configuration des frais scolaires (inscription, mensualité/tranche, caution, activités extrascolaires).

Plans de paiement (paiement intégral, en 3 tranches, mensualisé).

Rappels automatiques par SMS/notification pour paiements en retard.

Gestion des bourses et remises.

Comptabilité basique : encaissements, dépenses, rapports journaliers/mensuels. Export CSV / PDF pour comptable.

Sécurité : journaux d’audit pour toutes transactions.


10) Examens & correction

Planification des examens (salles, surveillants).

Impression des feuilles d’examen et génération de listes d’appel.

Saisie des notes par lots (import CSV) et correction assistée (par grille).

Calcul automatique de rangs/classements par matière et général.


11) Communication & support

Messagerie interne (enseignant ↔ parent), templates de message (absences, réunions, convocations).

Envoi SMS en masse (pour grèves, fermeture, événements).

Option d’intégration WhatsApp Business API (si disponible) pour messages riches.

Suivi tickets support (pour parents & personnel).


12) Statistiques & analytics

Tableau de bord : taux de réussite par niveau, moyenne par matière, évolution annuelle, absentéisme, top/bottom performers.

Visualisations exportables et filtres par classe, année, genre, quartier.


13) Bibliothèque & matériaux pédagogiques

Catalogue livres, prêts, inventaire, pénalités.

Upload ressources (PDF, vidéos) accessibles par classes/enseignants.


14) Santé & cantine & transport

Fiche santé élève (allergies, médicaments). Notifications infirmier.

Gestion cantine (inscription repas, paiement), menus imprimables.

Gestion transport (bus), arrêts, liste d’embarquement, paiements.


15) Sécurité, sauvegarde et confidentialité

Authentification sécurisée (mot de passe, OTP SMS pour actions sensibles).

Chiffrement des données sensibles en repos et en transit (HTTPS/TLS).

Backups automatiques quotidiens, export et restauration.

Journalisation des actions administratives (audit trail).

Politique de suppression/anonymisation des données obsolètes.



---

Adaptations spécifiques à Lubumbashi / RDC

1. Mobile-first & PWA : beaucoup d’utilisateurs sur smartphone, connexion instable → PWA pour installation sur téléphone et fonctionnement offline partiel.


2. Mode hors-ligne & Sync : saisie offline (notes, présences) et synchronisation automatique quand la connexion revient.


3. Optimisation faible bande passante : pages légères, images compressées, lazy-loading, élimination de lourds frameworks côté client.


4. SMS & USSD : notifications via SMS pour parents sans smartphone ; USSD pour récupération rapide de solde/facture (ex. 123schoolID#).


5. Paiements mobiles : intégration Airtel Money, Orange Money — génération QR code paiement et notifications de paiement. Support pour paiements en CDF et possibilité d’enregistrer paiement en USD.


6. Langues : interface française par défaut + option swahili (kiKingwana) pour parents peu francophones.


7. Impression & distribution papier : prévoir modèles A4 pour écoles qui préfèrent bulletins papier ; export facile pour imprimerie locale.


8. Kiosque à l’école : petit terminal ou tablette au secrétariat pour que parents viennent consulter bulletins/solde si pas d’accès internet.


9. Respect des contraintes locales : gestion des interruptions d’électricité (autosave), sauvegarde locale temporaire.




---

Modèle de données essentiel (entités principales)

École, Année scolaire, Niveau, Classe, Élève, Parent/Tuteur, Enseignant, Matière, Évaluation (type, date), Note, Bulletin, Paiement, Facture, Reçu, EmploiDuTemps, Salle, Transport, Livre, TicketSupport.



---

Règles & workflows clefs (exemples)

1. Workflow inscription : Parent remplit → secrétariat vérifie → paiement frais inscription (option) → élève affecté en classe → QR code & dossier créé.


2. Saisie des notes : enseignant saisit PC → validation par chef de département pour examens → correctifs avant publication.


3. Publication des bulletins : après validation du directeur, bulletins disponibles sur portail parent + envoi SMS.


4. Promotion : calcul automatique selon règles; les cas limites (8–9.9) créent une alerte et un plan de rattrapage automatique; décision finale humaine.




---

UI / UX — pages clés (mobile & desktop)

Tableau de bord (Admin) : résumé élèves, finances, alertes.

Liste élèves / fiche élève détaillée.

Page saisie notes (par classe / matière).

Emploi du temps interactif.

Portail parent (accueil, bulletins, factures, messages).

Générateur bulletins (aperçu + PDF).

Module finance (factures, paiements, reçus).

Rapports & exports.



---

Sécurité & conformité (recommandations)

HTTPS partout, politiques CORS strictes.

Sauvegardes chiffrées, retention policy (ex. 7 ans pour dossiers scolaires si exigé).

Rôles & permissions strictes.

Consentement parent lors d’inscription (stockage photos/données).

Formation du personnel sur sécurité & confidentialité.



---

Déploiement & maintenance (recommandations pratiques)

Architecture : backend REST/GraphQL (ex: Node.js ou Python/Flask/FastAPI) + base MySQL ou PostgreSQL ; frontend React/Vue + PWA.

Hébergement : cloud (DigitalOcean, OVH, ou fournisseur local) + backups off-site. Possibilité d’un serveur local pour écoles sans connectivité, répliqué vers le cloud.

Monitoring : alertes uptime, backup checks.

SLA & support : SLA pour les écoles (synchronisation, restauration), formation initiale pour secrétariat/enseignants.

Coût : prévoir licence modulable (par élève / par an) et options hébergement, SMS/paiement facturation.



---

Extensions & évolutions possibles

Application mobile native pour parents/enseignants.

Module e-learning / devoirs en ligne.

API pour intégration avec ministères / systèmes d’examen nationaux.

Dashboard municipal / multi-écoles pour district Lubumbashi.



---

Si tu veux, je peux maintenant :

transformer tout ça en cahier des charges technique (Exigences fonctionnelles + non-fonctionnelles) ; ou

générer un diagramme de données (ERD) et un schéma API ; ou

créer les pages UI/UX (wireframes) prioritaires pour la version MVP.


Dis-moi lequel tu veux tout de suite — je m’occupe de la suite sans attendre.
