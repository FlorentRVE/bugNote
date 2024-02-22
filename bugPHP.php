=== BUG MAILER ====

Le package MESSENGER installé fait que les mails vont en queur au lieu d'être envoyé directement. Corrigé en rajoutant "message_bus :false" dans config/packages/mailer.yaml

===================================================================================

=== PROBLEME FORM COLLECTION ENTITE ===
Si l'on doit compléter un formulaire avec une collection d'entité, utiliser une boucle foreach, exemple:

    $user = $userRepository->findOneBy(['email' => $this->getUser()->getUserIdentifier()]);
    $services = $user->getDepartement(); // RECUPERATION DES SERVICES, IL Y EN A PLUSIEURS ( COLLECTION D'ENTITE )
  
    $saisi = new Saisi();
    $form = $this->createForm(SaisiType::class, $saisi);
    $form->handleRequest($request);
    $saisi->setCollaborateur($user);
    $saisi->setDate(new \DateTimeImmutable());
    $saisi->setHeure(new \DateTimeImmutable());
    
    foreach($services as $service) {
        $saisi->addService($service); // ADDSERVICE ATTEND UNE ENTITE MAIS ON A UNE COLLECTION D'ENTITE, ALORS ON BOUCLE POUR TOUS LES RENTRER
    }

=================================================================================

=== BUG BOTMAN ===

> A la fin du controller comprennant la logique, on rajoute un die() au lieu de return new Response(), sinon on aura une erreur Header déjà envoyé.

