<?php
namespace AppBundle\Form;

use AppBundle\Entity\TypeProduit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

//TODO c est moidddjggfhgfhgfhgfhgf
class ProduitType extends AbstractType
{

    /**
     *
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array(
            'label' => 'Libelle du produit'
        ))
            ->add('typeProduit', ChoiceType::class, array(
            'required' => true,
            'choices' => TypeProduit::getTousTypesProduits(),
            'choices_as_values' => true,
            'choice_label' => function ($choice) {
                return TypeProduit::getTypeProduit($choice);
            }
        ))
            ->add('stock', NumberType::class, array(
            'label' => 'Stock en vente'
        ))
            ->add('prixAuKg', NumberType::class, array(
            'label' => 'Prix du produit au Kg'
        ))
            ->add('datePeremption', DateType::class, [
            'label' => 'Date de peremption du produit'
        ])
            ->add('quantiteMinimaleAchat', NumberType::class, array(
            'label' => 'Quantite minimale d\'achat du produit'
        ))
            ->add('dateMiseEnLigne', DateType::class, array(
            'label' => 'Date de mise en ligne du produit'
        ));
    }

    /**
     *
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Produit'
        ));
    }

    /**
     *
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_produit';
    }
}
