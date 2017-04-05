select np.id, np.nome_item, p.pi, p.tamanho, p.preco, i.image_path
  from names_products as np, products as p, images as i
 where np.id = p.name_product_id
   and i.product_id = p.id;
