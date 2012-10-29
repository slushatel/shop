<?php

/**
 * @version 0.1
 * @author recens
 * @license GPL
 * @copyright Гельтищева Нина (http://recens.ru)
 */

/**
 * Масштабирование изображения
 *
 * Функция работает с PNG, GIF и JPEG изображениями.
 * Масштабирование возможно как с указаниями одной стороны, так и двух, в процентах или пикселях.
 *
 * @param string Расположение исходного файла
 * @param string Расположение конечного файла
 * @param integer Ширина конечного файла
 * @param integer Высота конечного файла
 * @param bool Размеры даны в пискелях или в процентах
 * @return bool
 */
class MyImage {

  private $imagePath;

  function __construct($imagePath) {
    $this->imagePath = $imagePath;
  }

  function getImagePath() {
    return $this->imagePath;
  }

  function getImageData() {
    $image = file_get_contents($this->imagePath);
    //$image = mysql_escape_string($image);
    return $image;
  }

  function resizeImage($resizeType, $sizeArray) {
    //$size = array('wmax' => 320, 'hmax' => 140);
    if ($sizeArray !== NULL) {
      if ($resizeType === 1) {
        list($w, $h) = getimagesize($this->imagePath); // получаем размеры изображения

        $wmax = $sizeArray['wmax'];
        $hmax = $sizeArray['hmax'];

        if ($w > $wmax or $h > $hmax) {
          if ($w / $wmax > $h / $hmax) { // если ширина меньше высоты
            $this->resize(null, $wmax, 0); // уменьшаем по ширине
          } else { // иначе
            $this->resize(null, 0, $hmax); //уменьшаем по высоте
          }
        }
      }
    }
  }

  function resize($file_output, $w_o, $h_o, $percent = false) {
    if ($file_output === null) {
      $file_output = $this->imagePath;
    }

    list($w_i, $h_i, $type) = getimagesize($this->imagePath);
    if (!$w_i || !$h_i) {
      echo 'Невозможно получить длину и ширину изображения';
      return;
    }
    $types = array('', 'gif', 'jpeg', 'png');
    $ext = $types[$type];
    if ($ext) {
      $func = 'imagecreatefrom' . $ext;
      $img = $func($this->imagePath);
    } else {
      echo 'Некорректный формат файла';
      return;
    }
    if ($percent) {
      $w_o *= $w_i / 100;
      $h_o *= $h_i / 100;
    }
    if (!$h_o)
      $h_o = $w_o / ($w_i / $h_i);
    if (!$w_o)
      $w_o = $h_o / ($h_i / $w_i);
    $img_o = imagecreatetruecolor($w_o, $h_o);
    imagecopyresampled($img_o, $img, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i);
    if ($type == 2) {
      return imagejpeg($img_o, $file_output, 100);
    } else {
      $func = 'image' . $ext;
      return $func($img_o, $file_output);
    }
  }

  /**
   * Обрезка изображения
   *
   * Функция работает с PNG, GIF и JPEG изображениями.
   * Обрезка идёт как с указанием абсоютной длины, так и относительной (отрицательной).
   *
   * @param string Расположение исходного файла
   * @param string Расположение конечного файла
   * @param array Координаты обрезки
   * @param bool Размеры даны в пискелях или в процентах
   * @return bool
   */
  function crop($file_output, $crop = 'square', $percent = false) {
    if ($file_output === null) {
      $file_output = $this->imagePath;
    }

    list($w_i, $h_i, $type) = getimagesize($this->imagePath);
    if (!$w_i || !$h_i) {
      echo 'Невозможно получить длину и ширину изображения';
      return;
    }
    $types = array('', 'gif', 'jpeg', 'png');
    $ext = $types[$type];
    if ($ext) {
      $func = 'imagecreatefrom' . $ext;
      $img = $func($this->imagePath);
    } else {
      echo 'Некорректный формат файла';
      return;
    }
    if ($crop == 'square') {
      $min = $w_i;
      if ($w_i > $h_i)
        $min = $h_i;
      $w_o = $h_o = $min;
    } else {
      list($x_o, $y_o, $w_o, $h_o) = $crop;
      if ($percent) {
        $w_o *= $w_i / 100;
        $h_o *= $h_i / 100;
        $x_o *= $w_i / 100;
        $y_o *= $h_i / 100;
      }
      if ($w_o < 0)
        $w_o += $w_i;
      $w_o -= $x_o;
      if ($h_o < 0)
        $h_o += $h_i;
      $h_o -= $y_o;
    }
    $img_o = imagecreatetruecolor($w_o, $h_o);
    imagecopy($img_o, $img, 0, 0, $x_o, $y_o, $w_o, $h_o);
    if ($type == 2) {
      return imagejpeg($img_o, $file_output, 100);
    } else {
      $func = 'image' . $ext;
      return $func($img_o, $file_output);
    }
  }

}

?>