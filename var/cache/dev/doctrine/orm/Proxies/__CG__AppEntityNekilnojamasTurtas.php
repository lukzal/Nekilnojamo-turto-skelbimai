<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class NekilnojamasTurtas extends \App\Entity\NekilnojamasTurtas implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'id', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'namo_numeris', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'plotas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'kambariu_skaicius', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'pastato_tipas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'metai', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'sildymas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'apsauga', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'gatves_adresas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'miestas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'aukstai', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'sklypo_plotas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'buto_numeris', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'naudotojas'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'id', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'namo_numeris', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'plotas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'kambariu_skaicius', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'pastato_tipas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'metai', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'sildymas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'apsauga', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'gatves_adresas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'miestas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'aukstai', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'sklypo_plotas', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'buto_numeris', '' . "\0" . 'App\\Entity\\NekilnojamasTurtas' . "\0" . 'naudotojas'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (NekilnojamasTurtas $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNamoNumeris(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNamoNumeris', []);

        return parent::getNamoNumeris();
    }

    /**
     * {@inheritDoc}
     */
    public function setNamoNumeris(int $namo_numeris): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNamoNumeris', [$namo_numeris]);

        return parent::setNamoNumeris($namo_numeris);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlotas(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlotas', []);

        return parent::getPlotas();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlotas(int $plotas): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlotas', [$plotas]);

        return parent::setPlotas($plotas);
    }

    /**
     * {@inheritDoc}
     */
    public function getKambariuSkaicius(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKambariuSkaicius', []);

        return parent::getKambariuSkaicius();
    }

    /**
     * {@inheritDoc}
     */
    public function setKambariuSkaicius(?int $kambariu_skaicius): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKambariuSkaicius', [$kambariu_skaicius]);

        return parent::setKambariuSkaicius($kambariu_skaicius);
    }

    /**
     * {@inheritDoc}
     */
    public function getPastatoTipas(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPastatoTipas', []);

        return parent::getPastatoTipas();
    }

    /**
     * {@inheritDoc}
     */
    public function setPastatoTipas(?string $pastato_tipas): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPastatoTipas', [$pastato_tipas]);

        return parent::setPastatoTipas($pastato_tipas);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetai(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetai', []);

        return parent::getMetai();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetai(\DateTimeInterface $metai): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetai', [$metai]);

        return parent::setMetai($metai);
    }

    /**
     * {@inheritDoc}
     */
    public function getSildymas(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSildymas', []);

        return parent::getSildymas();
    }

    /**
     * {@inheritDoc}
     */
    public function setSildymas(?string $sildymas): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSildymas', [$sildymas]);

        return parent::setSildymas($sildymas);
    }

    /**
     * {@inheritDoc}
     */
    public function getApsauga(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApsauga', []);

        return parent::getApsauga();
    }

    /**
     * {@inheritDoc}
     */
    public function setApsauga(?string $apsauga): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApsauga', [$apsauga]);

        return parent::setApsauga($apsauga);
    }

    /**
     * {@inheritDoc}
     */
    public function getGatvesAdresas(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGatvesAdresas', []);

        return parent::getGatvesAdresas();
    }

    /**
     * {@inheritDoc}
     */
    public function setGatvesAdresas(string $gatves_adresas): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGatvesAdresas', [$gatves_adresas]);

        return parent::setGatvesAdresas($gatves_adresas);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiestas(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiestas', []);

        return parent::getMiestas();
    }

    /**
     * {@inheritDoc}
     */
    public function setMiestas(string $miestas): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiestas', [$miestas]);

        return parent::setMiestas($miestas);
    }

    /**
     * {@inheritDoc}
     */
    public function getAukstai(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAukstai', []);

        return parent::getAukstai();
    }

    /**
     * {@inheritDoc}
     */
    public function setAukstai(?int $aukstai): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAukstai', [$aukstai]);

        return parent::setAukstai($aukstai);
    }

    /**
     * {@inheritDoc}
     */
    public function getSklypoPlotas(): ?\App\Entity\Namas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSklypoPlotas', []);

        return parent::getSklypoPlotas();
    }

    /**
     * {@inheritDoc}
     */
    public function setSklypoPlotas(?\App\Entity\Namas $sklypo_plotas): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSklypoPlotas', [$sklypo_plotas]);

        return parent::setSklypoPlotas($sklypo_plotas);
    }

    /**
     * {@inheritDoc}
     */
    public function getButoNumeris(): ?\App\Entity\Butas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getButoNumeris', []);

        return parent::getButoNumeris();
    }

    /**
     * {@inheritDoc}
     */
    public function setButoNumeris(?\App\Entity\Butas $buto_numeris): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setButoNumeris', [$buto_numeris]);

        return parent::setButoNumeris($buto_numeris);
    }

    /**
     * {@inheritDoc}
     */
    public function getNaudotojas(): ?\App\Entity\Naudotojai
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNaudotojas', []);

        return parent::getNaudotojas();
    }

    /**
     * {@inheritDoc}
     */
    public function setNaudotojas(?\App\Entity\Naudotojai $naudotojas): \App\Entity\NekilnojamasTurtas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNaudotojas', [$naudotojas]);

        return parent::setNaudotojas($naudotojas);
    }

}
