<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"user:read"}},
 *     denormalizationContext={"groups"={"user:write"}},
 *     collectionOperations={
 *      "get"={},
 *      "post"={},
 *      "check_gmail_user"={
 *          "method"="GET",
 *          "path"="/users/emails",
 *          "controller"=App\Controller\Api\CheckGmailUser::class,
 *       },
 *       "create_user"={
 *          "method"="POST",
 *          "path"="/users/create",
 *          "controller"=App\Controller\Api\CreateUser::class
 *       }
 *     },
 *     itemOperations={
 *       "get"={},
 *       "enabled_user"={
 *          "method"="GET",
 *          "path"="/users/{id}/enabled",
 *          "controller"=App\Controller\Api\EnabledUser::class
 *       },
 *       "put"={},
 *       "delete"={},
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    const ROLE_USER = 'ROLE_USER';
    const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"user:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"user:write"})
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordReset", type="string", length=255, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $passwordReset;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passwordResetDate", type="datetime", nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $passwordResetDate;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     * @Groups({"user:read", "user:write"})
     */
    private $role;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     * @Groups({"user:read", "user:write"})
     */
    protected $hasValidatedCGU = false;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $created;

    /**
     * @ORM\Column(name="deleted", type="datetime", nullable=true)
     * @Groups({"user:read", "user:write"})
     */
    private $deleted;

    /**
     * @var bool
     * @ORM\Column(type="boolean", options={"default":0})
     * @Groups({"user:read","user:write"})
     */
    protected $enabled = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return User
     */
    public function setEnabled(bool $enabled): User
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles(): array
    {
        return [$this->role];
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return bool
     */
    public function isHasValidatedCGU(): bool
    {
        return $this->hasValidatedCGU;
    }

    /**
     * @param bool $hasValidatedCGU
     */
    public function setHasValidatedCGU(bool $hasValidatedCGU): void
    {
        $this->hasValidatedCGU = $hasValidatedCGU;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @param \DateTime|null $passwordResetDate
     */
    public function setPasswordResetDate(?\DateTime $passwordResetDate): void
    {
        $this->passwordResetDate = $passwordResetDate;
    }

    /**
     * @return \DateTime|null
     */
    public function getPasswordResetDate(): ?\DateTime
    {
        return $this->passwordResetDate;
    }

    /**
     * @param string $passwordReset
     */
    public function setPasswordReset($passwordReset): void
    {
        $this->passwordReset = $passwordReset;
    }

    /**
     * @return string|null
     */
    public function getPasswordReset(): ?string
    {
        return $this->passwordReset;
    }

    /**
     * @param \DateTime|null $updated
     */
    public function setUpdated(?\DateTime $updated): void
    {
        $this->updated = $updated;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdated(): ?\DateTime
    {
        return $this->updated;
    }

    /**
     * @param \DateTime|null $creadted
     */
    public function setCreated(?\DateTime $creadted): void
    {
        $this->created = $creadted;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * @return \DateTime|null
     */
    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }

    /**
     * @param \DateTime $deleted
     */
    public function setDeleted(\DateTime $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * @return string|null
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Loads the user for the given username.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username)
    {
        // TODO: Implement loadUserByUsername() method.
    }

    /**
     * Refreshes the user for the account interface.
     *
     * @param UserInterface $user
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException if the account is not supported
     */
    public function refreshUser(UserInterface $user)
    {
        // TODO: Implement refreshUser() method.
    }

    public function eraseCredentials()
    {

    }
}
