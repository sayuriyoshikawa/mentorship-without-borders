<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceList;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\EventsRepository;
use Doctrine\ORM\EntityRepository;

use App\Entity\User;
use App\Entity\Mentor;
use App\Entity\Mentee;
use App\Entity\Mentorship;
use App\Entity\Achievements;

class StaticController extends AbstractController
{

    #[Route('/', name: 'user_index')]
    public function index(): Response
    {
        return $this->render('static/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('static/blog.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/partners', name: 'partners')]
    public function partners(): Response
    {
        return $this->render('static/partners.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }



    #[Route('/home', name: 'static_home')]
    public function home(): Response
    {
        $self = $this->getUser();
        
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
        $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
        $mentorships = $this->getDoctrine()->getRepository(Mentorship::class)->findAll();
        return $this->render("static/home.html.twig", array("users" => $users, "self" => $self, "mentors" =>$mentors, "mentees" => $mentees, "mentorships" => $mentorships ));
        }

        #[Route('/mentorfind', name: 'static_mentorfind')]
        public function mentorfind(): Response
        {
            $self = $this->getUser();
            
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
            $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
            return $this->render("static/mentorfind.html.twig", array("users" => $users, "self" => $self, "mentors" =>$mentors, "mentees" => $mentees  ));
        }

        #[Route('/mentorenglish', name: 'static_mentorenglish')]
        public function mentorenglish(): Response
        {
            $self = $this->getUser();
            
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
            $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
            return $this->render("static/mentorenglish.html.twig", array("users" => $users, "self" => $self, "mentors" =>$mentors, "mentees" => $mentees  ));
        }

        #[Route('/mentorgerman', name: 'static_mentorgerman')]
        public function mentorgerman(): Response
        {
            $self = $this->getUser();
            
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
            $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
            return $this->render("static/mentorgerman.html.twig", array("users" => $users, "self" => $self, "mentors" =>$mentors, "mentees" => $mentees  ));
        }

        #[Route('/mentorspanish', name: 'static_mentorspanish')]
        public function mentorspanish(): Response
        {
            $self = $this->getUser();
            
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
            $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
            return $this->render("static/mentorspanish.html.twig", array("users" => $users, "self" => $self, "mentors" =>$mentors, "mentees" => $mentees  ));
        }

        #[Route('/mentorjapanese', name: 'static_mentorjapanese')]
        public function mentorjapanese(): Response
        {
            $self = $this->getUser();
            
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
            $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
            return $this->render("static/mentorjapanese.html.twig", array("users" => $users, "self" => $self, "mentors" =>$mentors, "mentees" => $mentees  ));
        }

        #[Route('/mentorfrench', name: 'static_mentorfrench')]
        public function mentorfrench(): Response
        {
            $self = $this->getUser();
            
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
            $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
            return $this->render("static/mentorfrench.html.twig", array("users" => $users, "self" => $self, "mentors" =>$mentors, "mentees" => $mentees  ));
        }



        



    #[Route('/mentorcreate', name: 'mentor_create')]
    public function  create(request $request): Response
    {
        $mentor = new Mentor();
        $self = $this->getUser();
        $form = $this->createFormBuilder($mentor)


        ->add("username", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("mentors_descripton", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;" ,'rows' => '10')))
        ->add("profession", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("preofession_description", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10')))
        ->add("skills", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
    /*     ->add("languages", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"))) */
        ->add('languageone', ChoiceType::class, array( 'label' => 'Languages', 'choices'=>array('English'=>'English', 'German'=>'German', 'French'=>'French', 'Spanish'=>'Spanish', 'Japanese'=>'Japanese',),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:10px')))
        ->add('languagetwo', ChoiceType::class, array( 'label' => ' ', 'choices'=>array('English'=>'English', 'German'=>'German',  'Spanish'=>'Spanish', 'Japanese'=>'Japanese', 'None'=>' '),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:10px')))
        ->add('languagethree', ChoiceType::class, array( 'label' => ' ', 'choices'=>array('English'=>'English', 'German'=>'German', 'French'=>'French', 'Spanish'=>'Spanish', 'Japanese'=>'Japanese', 'None'=>''),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:20px')))

        ->add("contact", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("country", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("capacity", NumberType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
       /*  ->add('fk_user', EntityType::class, [ 'attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),
        'class' => User::class,
        'choice_label' => 'username',
    ])  */
    ->add("picture", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),'required' => false))
        ->add("save", SubmitType::class, array('attr' => array("class" => "btn btn-dark border-white text-light", "style" => "margin-bottom: 15px; margin-top: 15px;"), "label" => "Submit"))->getForm();
       

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $username = $form["username"]->getData();
        $mentors_descripton = $form["mentors_descripton"]->getData();
        $profession = $form["profession"]->getData();
        $preofession_description = $form["preofession_description"]->getData();
        $skills = $form["skills"]->getData();
        $languageone = $form["languageone"]->getData();
      $languagetwo = $form["languagetwo"]->getData();
        $languagethree = $form["languagethree"]->getData();
        $contact = $form["contact"]->getData();
        $country = $form["country"]->getData();
        $capacity = $form["capacity"]->getData();
        $picture = $form["picture"]->getData();
      


        $mentor->setUsername($username);
        $mentor->setMentorsDescripton($mentors_descripton);
        $mentor->setProfession($profession);
        $mentor->setPreofessionDescription($preofession_description); 
        $mentor->setSkills($skills);
        $mentor->setLanguageone($languageone);
        $mentor->setLanguagetwo($languagetwo);
        $mentor->setLanguageThree($languagethree);
        $mentor->setContact($contact);
        $mentor->setCountry($country);
        $mentor->setCapacity($capacity);
        $mentor->setPicture($picture);
        $mentor->setFkUser($self);
       

        $em = $this->getDoctrine()->getManager();

        $em->persist($mentor);
        $em->flush();

        $this->addFlash('notice', 'Profile edited');

        return $this->redirectToRoute('static_home');
    }

    return $this->render('static/mentorcreate.html.twig', [
        "form" => $form->createView()
    ]);



    }

    
    #[Route('/mentoredit/{id}', name: 'mentor_edit')]
    public function  edit(request $request, $id): Response
    {
        $mentor = $this->getDoctrine()->getRepository(Mentor::class)->find($id);
        $form = $this->createFormBuilder($mentor)
    

        ->add("username", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("mentors_descripton", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;" ,'rows' => '10')))
        ->add("profession", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("preofession_description", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10')))
        ->add("skills", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
    /*     ->add("languages", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"))) */
        ->add('languageone', ChoiceType::class, array( 'label' => 'Languages', 'choices'=>array('English'=>'English', 'German'=>'German', 'French'=>'French', 'Spanish'=>'Spanish', 'Japanese'=>'Japanese',),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:10px')))
        ->add('languagetwo', ChoiceType::class, array( 'label' => ' ', 'choices'=>array('English'=>'English', 'German'=>'German', 'French'=>'French', 'Spanish'=>'Spanish', 'Japanese'=>'Japanese', 'None'=>' '),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:10px')))
        ->add('languagethree', ChoiceType::class, array( 'label' => ' ', 'choices'=>array('English'=>'English', 'German'=>'German', 'French'=>'French', 'Spanish'=>'Spanish', 'Japanese'=>'Japanese', 'None'=>' '),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:20px')))

        ->add("contact", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("country", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("capacity", NumberType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
       /*  ->add('fk_user', EntityType::class, [ 'attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),
        'class' => User::class,
        'choice_label' => 'username',
    ])  */
    ->add("picture", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),'required' => false))
        ->add("save", SubmitType::class, array('attr' => array("class" => "btn btn-dark border-white text-light", "style" => "margin-bottom: 15px; margin-top: 15px;"), "label" => "Submit"))->getForm();
       

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $username = $form["username"]->getData();
        $mentors_descripton = $form["mentors_descripton"]->getData();
        $profession = $form["profession"]->getData();
        $preofession_description = $form["preofession_description"]->getData();
        $skills = $form["skills"]->getData();
        $languageone = $form["languageone"]->getData();
      $languagetwo = $form["languagetwo"]->getData();
        $languagethree = $form["languagethree"]->getData();
        $contact = $form["contact"]->getData();
        $country = $form["country"]->getData();
        $capacity = $form["capacity"]->getData();
        $picture = $form["picture"]->getData();
      



        $mentor->setUsername($username);
        $mentor->setMentorsDescripton($mentors_descripton);
        $mentor->setProfession($profession);
        $mentor->setPreofessionDescription($preofession_description); 
        $mentor->setSkills($skills);
        $mentor->setLanguageone($languageone);
        $mentor->setLanguagetwo($languagetwo);
        $mentor->setLanguageThree($languagethree);
        $mentor->setContact($contact);
        $mentor->setCountry($country);
        $mentor->setCapacity($capacity);
        $mentor->setPicture($picture);
       

        $em = $this->getDoctrine()->getManager();

        $em->persist($mentor);
        $em->flush();

        $this->addFlash('notice', 'Profile edited');

        return $this->redirectToRoute('static_home');
    }

    return $this->render('static/mentoredit.html.twig', [
        "form" => $form->createView()
    ]);



    }



    #[Route('/menteecreate', name: 'mentee_create')]
    public function  menteecreate(request $request): Response
    {
        $mentee = new Mentee();
        $self = $this->getUser();
        $form = $this->createFormBuilder($mentee)
        ->add("username", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("profession", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("profession_description", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10')))
        ->add("education", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))

        ->add("skills", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("goal", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10')))
        ->add("contact", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
       /*  ->add('fk_user', EntityType::class, [ 'attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),
        'class' => User::class,
        'choice_label' => 'username',
    ])  */
    ->add("picture", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),'required' => false))
        ->add("save", SubmitType::class, array('attr' => array("class" => "btn btn-dark border-white text-light", "style" => "margin-bottom: 15px; margin-top: 15px;"), "label" => "Submit"))->getForm();
       

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $profession = $form["profession"]->getData();
        $username = $form["username"]->getData();
        $profession_description = $form["profession_description"]->getData();
        $education = $form["education"]->getData();
        $skills = $form["skills"]->getData();
        $goal = $form["goal"]->getData();
        $contact = $form["contact"]->getData();
        $picture = $form["picture"]->getData();
      



        
        $mentee->setprofession($profession);
        $mentee->setUsername($username);
        $mentee->getProfessionDescription($profession_description); 
        $mentee->setEducation($education); 
        $mentee->setSkills($skills);
        $mentee->setGoal($goal);
        $mentee->setContact($contact);
        $mentee->setPicture($picture);
        $mentee->setFkUser($self);
       

        $em = $this->getDoctrine()->getManager();

        $em->persist($mentee);
        $em->flush();

        $this->addFlash('notice', 'Profile edited');

        return $this->redirectToRoute('static_home');
    }

    return $this->render('static/menteecreate.html.twig', [
        "form" => $form->createView()
    ]);



    }

  

    #[Route('/menteeedit/{id}', name: 'mentee_edit')]

    public function  menteedit(request $request, $id): Response
    {
        $mentee = $this->getDoctrine()->getRepository(Mentee::class)->find($id);
        $form = $this->createFormBuilder($mentee)

        ->add("username", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))

        ->add("profession", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("profession_description", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10')))
        ->add("education", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))

        ->add("skills", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("goal", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
        ->add("contact", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;")))
       /*  ->add('fk_user', EntityType::class, [ 'attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),
        'class' => User::class,
        'choice_label' => 'username',
    ])  */
    ->add("goal", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10')))

    ->add("picture", TextType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),'required' => false))
        ->add("save", SubmitType::class, array('attr' => array("class" => "btn btn-dark border-white text-light", "style" => "margin-bottom: 15px; margin-top: 15px;"), "label" => "Submit"))->getForm();
       

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $profession = $form["profession"]->getData();
        $profession_description = $form["profession_description"]->getData();
        $education = $form["education"]->getData();
        $skills = $form["skills"]->getData();
        $goal = $form["goal"]->getData();
        $contact = $form["contact"]->getData();
        $picture = $form["picture"]->getData();
        $goal = $form["goal"]->getData();
        $username = $form["username"]->getData();


      



        $mentee->setprofession($profession);
        $mentee->getProfessionDescription($profession_description); 
        $mentee->setEducation($education); 
        $mentee->setSkills($skills);
        $mentee->setGoal($goal);
        $mentee->setContact($contact);
        $mentee->setPicture($picture);
        $mentee->setGoal($goal);
        $mentee->setUsername($username);


       

        $em = $this->getDoctrine()->getManager();

        $em->persist($mentee);
        $em->flush();

        $this->addFlash('notice', 'Profile edited');

        return $this->redirectToRoute('static_home');
    }

    return $this->render('static/menteeedit.html.twig', [
        "form" => $form->createView()
    ]);



    }

    #[Route('/creatementorship', name: 'mentorship_create')]
    public function  mentorshipcreate(request $request): Response
    {
        $mentorship = new Mentorship();
        $self = $this->getUser();
        $form = $this->createFormBuilder($mentorship)

    

        ->add('fk_mentee', EntityType::class, [ 'attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;"),
        'class' => Mentee::class,
        'choice_label' => 'username',
    ]) 

        
        ->add("goal", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10', "label" => "Goals")))
       
        ->add("save", SubmitType::class, array('attr' => array("class" => "btn btn-dark border-white text-light", "style" => "margin-bottom: 15px; margin-top: 15px;"), "label" => "Submit"))->getForm();
       

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $goal = $form["goal"]->getData();
    
        $fk_mentee = $form["fk_mentee"]->getData();
       
       



        $mentorship->setGoal($goal);
   
        $mentorship->setFkMentee($fk_mentee);
        $mentorship->setFkUser($self);
       

        $em = $this->getDoctrine()->getManager();

        $em->persist($mentorship);
        $em->flush();

        $this->addFlash('notice', 'Profile edited');

        return $this->redirectToRoute('static_home');
    }

    return $this->render('static/creatementorship.html.twig', [
        "form" => $form->createView()
    ]);



    }




    #[Route('/editmentorship/{id}', name: 'mentorship_edit')]
    public function  mentorshipedit(request $request, $id): Response
    {
        $mentorship = $this->getDoctrine()->getRepository(Mentorship::class)->find($id);
        $form = $this->createFormBuilder($mentorship)

    

     
        
        ->add("goal",  TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;",'rows' => '10' ),'required' => false, 'empty_data' => '' ))
        ->add("steps", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;", 'rows' => '10'), 'required' => false))
        ->add("achievements", TextareaType::class, array('attr' => array("class" => "form-control", "style" => "margin-bottom: 15px;", 'rows' => '10'), 'required' => false))
       
        ->add("save", SubmitType::class, array('attr' => array("class" => "btn btn-dark border-white text-light", "style" => "margin-bottom: 15px; margin-top: 15px;"), "label" => "Submit"))->getForm();
       

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $goal = $form["goal"]->getData();
        $steps = $form["steps"]->getData();
        $achievements = $form["achievements"]->getData();

       
       
       



        $mentorship->setGoal($goal);
        $mentorship->setSteps($steps);
        $mentorship->setAchievements($achievements);
      
      
       
       

        $em = $this->getDoctrine()->getManager();

        $em->persist($mentorship);
        $em->flush();

        $this->addFlash('notice', 'Profile edited');

        return $this->redirectToRoute('static_home');
    }

    return $this->render('static/editmentorship.html.twig', [
        "form" => $form->createView()
    ]);

    }

    #[Route('/mentorshipdetails/{id}', name: 'mentorship_details')]
    public function  mentorshipdetails( $id): Response
    {
        $mentorship = $this->getDoctrine()->getRepository(Mentorship::class)->find($id);
        

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $mentors = $this->getDoctrine()->getRepository(Mentor::class)->findAll();
        $mentees = $this->getDoctrine()->getRepository(Mentee::class)->findAll();
        return $this->render("static/mentorshipdetails.html.twig", array("users" => $users,  "mentors" =>$mentors, "mentees" => $mentees, "mentorship" => $mentorship ));
        }





}
