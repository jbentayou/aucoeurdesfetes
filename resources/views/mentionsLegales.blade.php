<!DOCTYPE html>
<html>
    @include('header')
    
    <!--<body background="/images/FOND.png" class="parcours">-->
    <body class="Annexe">
        <div class="headerPL">
            <a href="javascript:history.go(-1)">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo2 class="img-rounded"']) !!}</a>
        </div>
        <div class="container">
            <h1>Mentions légales du site</h1>
            <p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et visiteurs du site Au cœur des fêtes les présentes mentions légales.<br/>
            Le site Au cœur des fêtes est accessible à l’adresse suivante : www.aucoeurdesfetes.fr (ci-après « le Site »). L’accès et l’utilisation du Site sont soumis aux présentes « Mentions légales » détaillées ci-après ainsi qu’aux lois et/ou règlements applicables.<br/>
            La connexion, l’utilisation et l’accès à ce Site impliquent l’acceptation intégrale et sans réserve de l’internaute de toutes les dispositions des présentes Mentions Légales.</p><br/>
            <h2>Informations légales</h2>
            <h4>En vertu de l’Article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé dans cet article l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</h4> 
            <h4><b>Le site Au cœur des fêtes est édité par :</b> Atelier Audiovisuel du Pays </h4>
            <h4><b>Adresse e-mail :</b> Atelieraudiovisueldupays@gmail.com</h4> 
            <h4><b>Le site est hébérgé par : </b>OVH</h4>
            <h4>Dont le siège social est situé à l’adresse suivante : 2 rue Kellermann - 59100 Roubaix</h4> 
            <h4><b>Téléphone :</b> +33 9 72 10 10 07</h4><br/>
            
            <h2>Contact</h2>
            <h4>Pour tout signalement de contenus ou d’activités illicites, l’Utilisateur peut contacter L’Éditeur à l’adresse suivante : Atelieraudiovisueldupays@gmail.com , ou par courrier recommandé avec accusé de réception adressé à L’Éditeur aux coordonnées précisées dans les présentes mentions légales. </h4><br/>
            
            <h2>Auteur et Réalisation : </h2><h3><b>Roland Dargelez</b></h3><br/>
            <h2>Partenaires : </h2>
                <div class="partenaires">
                    {!! Html::Image('/images/iut.png', "iut", ['id=iut  width=19% class=partenaire']) !!}
                    {!! Html::Image('/images/fac.png', "fac", ['id=fac width=19% class=partenaire']) !!}
                    {!! Html::Image('/images/aadp.jpg', "aadp", ['id=aadp width=19% class=partenaire']) !!}
                </div><br/>
            <h2>Equipe de développement : </h2>
            <h3><b>Jean Bentayou -</b> Développeur</h3><br/>
            <h3><b>Paul Laborde -</b> Documentation API MapBox</h3><br/>
            <h3><b>Alexandre Taube -</b> Chef de Projet / Graphisme / Communication</h3><br/>
            <h3><b>Chloé Handy -</b> Chef de Projet / Responsable de la communication</h3><br/>
            <h3>Licence professionnelle <br/> Métiers du numérique : conception, rédaction et réalisation web <br/>IUT Bayonne Pays Basque <br/> Adresse : 2 allées du parc Montaury – 64600 ANGLET<br/>Site Web : https://www.iutbayonne.univ-pau.fr/</h3><br/>
            
            <h2>Voix-off : </h2>
            <h3><b>Mazarine Besnateau -</b> La fille</h3><br/>
            <h3><b>Martin Mioque -</b> Le garçon</h3><br/>
            <h3><b>Léna Ferran -</b> La femme</h3><br/>
            <h3><b>Txomin Urrutia-Delay -</b> L'homme</h3><br/>
            
            <h2>Avatars et pictogrammes : </h2>
            <h3><b>Jules Ferran</b></h3><br/>
            <h3><b>Maxime Tartas</b></h3><br/>
            <h3><b>Mathieu Coelho</b></h3><br/>
            
            <h2>Production : </h2>
            <h3><b>Philippe Corcuff</b></h3><br/>
            
            <h2>Administration  de  production : </h2>
            <h3><b>Arlette Prévost</b></h3><br/>
            
            <h2>Technique : </h2>
            <h3><b>Benat Lagoarde</b></h3><br/>
            
            <h2>Photographie : </h2>
            <h3><b>Roland Dargelez</b></h3><br/>
            
            <h2>Remerciements : </h2>
            <h3><b>Nous  remercions  toutes  les  personnes  qui  ont  aidé  à  la  réalisation  de  ce  projet.</b></h3><br/>
            <h4>Le  service  presse  de  la  ville  de  Bayonne  (Clair  Jomier)</h4>
            <h4> Les  arènes  de  Bayonne </h4>
            <h4>La  section  aviron  du  club  Aviron  Bayonnais</h4>
            <h4>Bruno  Sono  Bobkat  et  Mc  Yossi</h4>
            <h4>Les  différentes  bandas,  en  particulier  les  Joyeux  et  les  Cournon</h4>
            <h4>Mr  Paul  Exposito</h4>
            <h4>Haiz  egoa</h4>
            <h4>Tous  les  acteurs  de  la  fête  qui  ont  collaborés  et  facilités  le  tournage. </h4>
            <h4>Et aux personnes qui sont intervenu avant la réalisation de ce site…</h4><br/>
            
            <h2>Accessibilité</h2>
            <p>Le site est, par principe, accessible aux utilisateurs 24/24h et 7/7j, sauf interruption, programmée ou non, pour des besoins de maintenance ou en cas de force majeure. 
                En cas d’impossibilité d’accès au Site, celui-ci s’engage à faire son maximum afin d’en rétablir l’accès. Le Site ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant de son indisponibilité.</p><br/>
             
             <h2>Utilisation du site </h2>   
             <p>Vous n'avez pas l'autorisation :</p> 
             <p>-	De télécharger, copier ou retransmettre tout ou partie, du Site ou du Contenu du site, Au cœur des fêtes, sans licence ou accord écrit conclu avec l’Éditeur, ou en violation de la licence ou de l'accord en question ;</p> 
             <p>-	D’utiliser, des méthodes d'exploration de données, des robots ou des méthodes de collecte ou d'extraction de données similaires ;</p>
             <p>-	De manipuler ou afficher le Site ou le Contenu du site, Au cœur des fêtes, en utilisant une technologie de "framing" ou similaire ; </p>
             <p>-	De sauvegarder, inscrire ou désinscrire, ou d'essayer de sauvegarder, d'inscrire ou de désinscrire, une partie à un service du site, Au cœur des fêtes, si vous n'en avez pas reçu l'autorisation expresse ;</p>
             <p>-	De procéder à la rétro-ingénierie, d'altérer ou de modifier toute partie du Site ou du Contenu du site, Au cœur des fêtes ;</p>
             <p>-	De contourner, désactiver ou perturber, de manière quelconque, les dispositifs de sécurité du Site ou les ressources système, services ou réseaux connectés au Site ou accessibles depuis celui-ci ;</p>
             <p>-	De vendre, accorder sous licence, louer ou commercialiser le Site ou le Contenu de quelque façon que ce soit, sans autorisation écrite de l’Editeur ;</p>
             <p>-	D'utiliser le site Au cœur des fêtes ou le Contenu à d'autres fins que celles envisagées.</p>
             <p>Toute utilisation non autorisée peut constituer une violation du droit en vigueur y compris, mais sans que cette liste soit exhaustive, les législations sur les droits d'auteur et le droit des marques, les lois relatives à la protection de la vie privée et à la publicité et les réglementations et législations en vigueur dans le domaine des communications.</p><br/>
             
             <h2>Liens Hypertexte</h2>
             <p>L’Éditeur rejette toute responsabilité, que ce soit de façon directe ou indirecte, concernant la qualité, le contenu, la nature ou la fiabilité des sites Web de tiers accessibles via un lien hypertexte affiché sur le Site, ou des sites Web référençant le Site. L’Éditeur n'a aucun contrôle sur ces sites, et n'est pas responsable du contenu des sites reliés ou des liens contenus dans un site relié, ou encore des révisions, modifications ou mises à jour apportées à ces sites. L’Éditeur vous propose ces liens uniquement à des fins de commodité, l'inclusion d'un lien n'impliquant pas l'affiliation, l'acceptation ou l'adoption par L’Éditeur d'un site ou des informations qu'il contient. Lorsque vous quittez le Site, n'oubliez pas que nos termes et politiques ne sont plus applicables. Consultez les termes et politiques (y compris les pratiques en matière de protection de la vie privée et de collecte de données) des sites sur lesquels vous naviguez à partir du Site.</p>
             <p>Votre participation, votre correspondance ou vos transactions avec un tiers trouvé, sur, ou via le Site, concernant le paiement et la livraison de marchandises ou services, et les termes, conditions, garanties ou déclarations associées à ces transactions, ne concernent que vous et le tiers en question. L’Éditeur ne pourra être tenue responsable des pertes, dommages ou autres encourus suite à des transactions de ce type.</p>
             <br/>
             <h2>Politique de cookies</h2>
             <p>Le site, Au cœur des fêtes, a éventuellement recours aux techniques de « cookies » lui permettant de traiter des statistiques et des informations sur le trafic, de faciliter la navigation et d’améliorer le service pour le confort de l’Utilisateur. </p>
             <p>Conformément à la législation européenne, le site, Au cœur des fêtes, a mis à jour sa politique de confidentialité en matière de cookies. L’Utilisateur est libre d’accepter ou de refuser les cookies de tous sites internet en modifiant les paramètres de son navigateur internet.</p>
             <br/>
             <h2>Droits d'auteur</h2>
             <p>Tous les contenus présents sur ce site, écrits, photographies, vidéos, musiques, animations et iconographiques, sont soumis au droit d’auteur et au droit de propriété intellectuelle des auteurs et du producteur du site. Ils ne peuvent être dupliqués ou utilisés sans l'autorisation écrite des auteurs et du producteur. Toute reprise ou duplication est conditionnée à l’accord des auteurs en vertu de l’article L.122-4 du Code de la Propriété Intellectuelle.</p>
             <p>Les différents contenus présents sur le site, rédigés et/ou mis en ligne par la rédaction du site, ne peuvent être reproduits librement sans l’indication de la source et l’autorisation de la production et des auteurs. La technique de lien profond ("deep linking") est proscrite.</p>
             <p>Si vous pensez qu'un élément du Site contrefait un copyright que vous détenez ou contrôlez, vous pouvez en informer L’Éditeur à l’adresse suivante : atelieraudiovisueldupays@gmail.com, ou par courrier recommandé avec accusé de réception adressé à L’Éditeur aux coordonnées précisées dans les présentes mentions légales.</p>
            <br/>
            <h2>Droit à l'image</h2>
            <p>La reproduction de l'image d'un groupe ou d'une scène de rue dans un lieu public est permise, sans besoin de solliciter le consentement de chaque personne photographiée/filmée. On considère que l'image ne porte pas atteinte à la vie privée, car la personne se trouvant dans un lieu public a consenti à être exposée aux regards des autres. </p>
            <p>Cependant, si votre apparition dans une des vidéos du site Au cœur des fêtes, vous semble déroger à votre droit à l’image, L’Éditeur s’engage dans un délai de 30 jours, à masquer votre visage afin de l’anonymiser. Pour cela, veuillez adresser votre réclamation à L’Éditeur à l’adresse suivante : atelieraudiovisueldupays@gmail.com, ou par courrier recommandé avec accusé de réception adressé à L’Éditeur aux coordonnées précisées dans les présentes mentions légales.</p>
            <br/>
            <h2>modifications apportées aux conditions d'utilisation du site</h2>
            <p>L’Éditeur se réserve le droit de modifier les dispositions contenues dans les Conditions d'Utilisation du Site ou toute politique ou directive du Site à tout moment et à son entière discrétion. Toute modification prend immédiatement effet au moment de sa publication sur le Site. Si vous continuez à utiliser le Site une fois la publication des modifications intervenue, cela entraîne votre acceptation de ces modifications. Nous vous encourageons à consulter les Conditions d'Utilisation du Site à chacune de vos visites sur l'un de nos sites.</p>
            <br/><br/><br/>
       
        </div>
         @include('IconBar')
    </body>
</html>