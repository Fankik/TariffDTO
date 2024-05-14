<?php

/**
 * TariffDTO класс для хранения данных тарифа
 */

final readonly class TariffDTO
{
    /**
     * Название
     * 
     * @var string $name
     */
    public string $name;

    /**
     * Стоимость
     * 
     * @var int $price
     */
    public int $price;

    /**
     * Срок действия
     * 
     * @var string $period
     */
    public string $period;

    /**
     * Скорость 
     * 
     * @var int $speed
     */
    public int $speed;

    /**
     * Тип тарифа
     * 
     * @var int $type
     */
    public int $type;

    /**
     * Создание тарифа
     * 
     * @param string $name Название
     * @param int $price Цена
     * @param string $period Срок действия
     * @param int $speed Скорость
     * @param int $type Тип тарифа
     * @return void
     */
    public function __construct(
        string $name,
        int $price,
        string $period,
        int $speed,
        int $type
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->period = $period;
        $this->speed = $speed;
        $this->type = $type;
    }

    /**
     * Создание тарифа
     * 
     * @param string $name Название
     * @param int $price Цена
     * @param string $period Срок действия
     * @param int $speed Скорость
     * @param int $type Тип тарифа
     * @return TariffDTO Тариф
     */
    public static function create(
        string $name,
        int $price,
        string $period,
        int $speed,
        int $type
    ): TariffDTO {
        return new self(name: $name, price: $price, period: $period, speed: $speed, type: $type);
    }
}
