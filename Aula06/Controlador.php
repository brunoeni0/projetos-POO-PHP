<?php
interface Controlador {
// Métodos Abstratos
public  function ligar(): void;
public  function deligar(): void;
public  function abrirMenu(): void;
public  function fecharMenu(): void;
public  function maisVolume(): void;
public  function menosVolume(): void;
public  function ligarMudo(): void;
public  function deligarMudo(): void;
public  function play(): void;
public  function pause(): void;
}
