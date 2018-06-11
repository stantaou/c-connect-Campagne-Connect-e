<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UtilisateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomUtilisateur')
            ->add('motDePasse',RepeatedType::class, [
                'type'=>PasswordType::class,
                'first_options' => ['label' =>'Mot de passe'],
                'second_options' => ['label'=>'Valider le mot de passe'],
                'invalid_message'=>'Vos mots de passe doivent correspondrent'
            ])
            ->add('mail', EmailType::class)
            ->add('numTelephone',null, ['label'=> 'Numero de telephone'])
            ->add('adresse')
            ->add('nom')
            ->add('prenom');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_utilisateur';
    }


}
