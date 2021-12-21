<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\User;
use App\Entity\Mentor;
use App\Entity\Mentee;
use App\Entity\Mentorship;

class UserController extends AbstractController
{
 


        #[Route('/dashboard', name: 'admin_dashboard')]
        public function dashboard(): Response
        {
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $mentorships = $this->getDoctrine()->getRepository(Mentorship::class)->findAll();

            return $this->render('user/dashboard.html.twig', [
                "users" => $users, 'mentorships' => $mentorships
            ]);
        }

       #[Route('/approval/{id}', name: 'user_approval')]
    public function  approvalstatus($id, Request $request): Response
    {
       
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $form = $this->createFormBuilder($user)

        ->add("approved", ChoiceType::class, ['attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),
        'choices' => [ 
            'Not Approved' => 'Not Approved',
            'Approved' => 'Approved'

            
        ]
    ] )

      ->add("save", SubmitType::class, array('attr' => array("class" => "btn btn-dark border-white text-light", "style" => "margin-bottom: 15px; margin-top: 15px;"), "label" => "Submit"))->getForm();
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

            $approved = $form["approved"]->getData();

           

                $user->setApproved($approved);

                $em = $this->getDoctrine()->getManager();

                $em->persist($user);
                $em->flush();

                $this->addFlash('notice', 'Approval-status edited');

                return $this->redirectToRoute('admin_dashboard');
            }
            return $this->render('user/approval.html.twig', [
                "form" => $form->createView()
            ]);   
} 

#[Route('details/{id}', name: 'event-details')]
public function details($id): Response
{
    $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();

    $user = $this->getDoctrine()->getRepository(User::class)->find($id);
    return $this->render('user/details.html.twig', [
        "user" => $user, "mentors" => $mentors
    ]);
}

#[Route('/delete/{id}', name: 'mentorship_delete')]
public function delete($id): Response
{


    $em = $this->getDoctrine()->getManager();
    $mentorship = $em->getRepository(Mentorship::class)->find($id);
    $em->remove($mentorship);
    $em->flush();

    $this->addFlash("notice", "Mentorship removed");

    return $this->redirectToRoute('admin_dashboard');
}





}
