<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Placard extends \App\Entity\Placard implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'NomPlacard' => [parent::class, 'NomPlacard', null],
        "\0".parent::class."\0".'RefPlacard' => [parent::class, 'RefPlacard', null],
        "\0".parent::class."\0".'chaussures' => [parent::class, 'chaussures', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'member' => [parent::class, 'member', null],
        'NomPlacard' => [parent::class, 'NomPlacard', null],
        'RefPlacard' => [parent::class, 'RefPlacard', null],
        'chaussures' => [parent::class, 'chaussures', null],
        'id' => [parent::class, 'id', null],
        'member' => [parent::class, 'member', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}