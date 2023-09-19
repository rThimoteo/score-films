<?php

function formatText($text) {
   // Transforma o texto em lowercase
   $text = mb_strtolower($text, 'UTF-8');

   // Substitui espaços por underlines
   $text = str_replace(' ', '_', $text);

   // Substitui caracteres acentuados
   $text = preg_replace('/[áàâãä]/u', 'a', $text);
   $text = preg_replace('/[éèêë]/u', 'e', $text);
   $text = preg_replace('/[íìîï]/u', 'i', $text);
   $text = preg_replace('/[óòôõö]/u', 'o', $text);
   $text = preg_replace('/[úùûü]/u', 'u', $text);
   $text = preg_replace('/[ç]/u', 'c', $text);

   // Remove caracteres especiais
   $text = preg_replace('/[^a-z0-9_]/', '', $text);

   return $text;
}