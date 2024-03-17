<?php

namespace App\Controller;

use App\Entity\Cleint;
use App\Form\ClientType;
use App\Repository\CleintRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/Client')]
class ClientController extends AbstractController
{
    #[Route('/', name: 'listes_clients')]
    public function index(CleintRepository $cleintRepository): Response
    {
        $client = $cleintRepository->findAll();

        return $this->render('client/liste.html.twig', [
            'clients' => $client
        ]);
    }

    #[Route('/ajouter', name: 'creation_client')]
    public function new(Request $request, CleintRepository $cleintRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        
        $client = new Cleint();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $cleintRepository->add($client, true);
            $entityManagerInterface->persist($client);
            $entityManagerInterface->flush();
            $this->addFlash('success', 'Client ajouté avec succes');
            return $this->redirectToRoute('listes_clients', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('client/ajout.html.twig', [
            'client' => $client,
            'form' => $form,
        ]);
    }

}
