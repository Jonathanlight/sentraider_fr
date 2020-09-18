<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Manager\UserManager;
use App\Repository\CityRepository;
use App\Repository\HelpRepository;
use App\Repository\UserRepository;
use App\Services\MessageService;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\Request;

class UserCrudController extends AbstractCrudController
{
    protected $messageService;

    public function __construct(MessageService $messageService){
        $this->messageService = $messageService;
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    /**
     * @Route(path="/admin_74ze5f/user/remove", name="remove_user")
     * @param Request $request
     * @param UserManager $userManager
     */
    public function removeUser(Request $request, UserManager $userManager) {
        $id = $request->query->get('id');

        $userManager->remove($id);

        return $this->redirectToRoute('admin', [
            'crudAction' => 'index',
            'entity' => $request->query->get('entity')
        ]);
    }

    /**
     * @Route(path="/admin_74ze5f/user/statistic", name="statistic")
     * @param Request $request
     * @param UserRepository $userRepository
     * @return Response
     */
    public function statistic(Request $request, UserRepository $userRepository) {
        $id = $request->query->get('id');
        $user = $userRepository->find($id);

        $counterView = [];
        $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

        foreach ($days as $day) {
            array_push($counterView, random_int(1, 10));
        }

        return $this->render('bundles/EasyAdminBundle/statistics_user.html.twig', [
            'user' => $user,
            'crudAction' => 'index',
            'counterView' => $counterView,
            'dataName' => $days
        ]);
    }

    public function configureActions(Actions $actions): Actions
    {
        $linkExterne = Action::new('linkExterne', 'Github', 'fa fa-glob')
            ->linkToUrl("https://github.com")
            ->setHtmlAttributes([
                'target' => '_blank'
            ])
            ->addCssClass('btn btn-success')
        ;

        $detailUser = Action::new('detailUser', 'Detail', 'fa fa-user')
            ->linkToCrudAction(Crud::PAGE_DETAIL)
            ->addCssClass('btn btn-info')
        ;

        $removeUser = Action::new('removeUser', 'Supprimer User', 'fa fa-trash')
            ->addCssClass('btn btn-danger')
            ->linkToRoute('remove_user', function(User $entity){
                return [
                    'id' => $entity->getId()
                ];
            })
        ;

        $statistic = Action::new('statistic', 'Stat User', 'fa fa-user')
            ->addCssClass('btn btn-primary')
            ->linkToRoute('statistic', function(User $entity) {
                return [
                    'id' => $entity->getId()
                ];
            })
        ;

        return $actions
            ->setPermission(Action::DELETE, 'ROLE_SUPER_ADMIN')
            ->disable(Action::DELETE)
            ->add(Crud::PAGE_INDEX, $linkExterne)
            ->add(Crud::PAGE_INDEX, $detailUser)
            ->add(Crud::PAGE_INDEX, $removeUser)
            ->add(Crud::PAGE_INDEX, $statistic)
        ;
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        parent::updateEntity($entityManager, $entityInstance);

        $this->messageService->addSuccess('Votre User à bien été modifier .');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('username'),
            TextField::new('email'),
            AssociationField::new('helps')->onlyOnForms(),
        ];
    }
}
