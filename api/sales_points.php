<?php

function sales_points_handler()
{
  try {
    //code...
    $sales_points = get_posts([
      'post_type' => 'puntos_de_venta',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'post_date',
      'order' => 'DESC',
    ]);

    $sales_points = array_map(function ($sales_point) {
      $products = get_field('producto', $sales_point->ID);
      $tipo_de_vale = get_field('tipo_de_vale', $sales_point->ID);
      $ubicacion = get_field('ubicacion', $sales_point->ID);
      $tipo_ubicacion = get_field('tipo_ubicacion', $sales_point->ID);
      $direccion = get_field('direccion', $sales_point->ID);
      $telefono = get_field('telefono', $sales_point->ID);
      $horario = get_field('horario', $sales_point->ID);
      $restriccion = get_field('restriccion', $sales_point->ID);
      $restricciones_generales = get_field('restricciones_generales', $sales_point->ID);
      $urlmapa = get_field('urlmapa', $sales_point->ID);
      $latitud = get_field('latitud', $sales_point->ID);
      $longitud = get_field('longitud', $sales_point->ID);
      $id_de_seguimiento = get_field('id_de_seguimiento', $sales_point->ID);

      return [
        'id' => $sales_point->ID,
        'producto' => implode(',', $products),
        "producto_pavo" => $products[0],
        "producto_cerdo" => $products[1],
        "tipovale" => implode(',', $tipo_de_vale),
        "tipovale_uno" => $tipo_de_vale[0],
        "tipovale_dos" => $tipo_de_vale[1],
        "ubicacion" => $ubicacion,
        "tipo_ubicacion" => $tipo_ubicacion,
        "nombre" => $sales_point->post_title,
        "direccion" => $direccion,
        "telefono" => $telefono,
        "horario" => $horario,
        "restricciones" => $restriccion,
        "restricciones_generales" => $restricciones_generales,
        "urlmapa" => get_image_url($urlmapa),
        "url_tienda_webp" => get_thumbnail_url($sales_point->ID, 'full'),
        "latitud" => $latitud,
        "longitud" => $longitud,
        "estado" => $sales_point->post_status == 'publish' ? 1 : 0,
        "id_seguimiento" => $id_de_seguimiento,
      ];
    }, $sales_points);

    return wp_send_json_success($sales_points);
  } catch (\Throwable $th) {
    return wp_send_json_error($th->getMessage(), 500);
  }
}
