/********************************
Developer: Anonymous, Anonymous
Anonymous Anonymous, Anonymous
********************************/
import React from 'react';
import { Title, Button, Flex, Stack, Rating, Center } from "@mantine/core";
import {InStock} from '../components/InStock'

//function to get path

export default function Product({ name, primary_image, price, inStock, rating, id }) {
  return (
    <Stack className="bg-white w-80 rounded-md relative px-12 py-8 gap-7 hover:bg-main-bg transition-color duration-300 !justify-between">
      <Title order={2} className="text-center">{name}</Title>
      <Center>
	<img alt={name} src={primary_image} className="w-40" />
      </Center>
      
      <Center>
        <Rating value={rating} size="xl" readOnly />
      </Center>

      <InStock inStock={inStock} />

      <Flex>
        <Title order={3}>
          {Intl.NumberFormat('en-GB', { decimal: 2, currency: 'GBP', style: "currency" }).format(price)}
        </Title>
      </Flex>
      
      <Button className="!w-36 !rounded-md" component="a" href={`/shop/product/${id}`}>See More</Button>
    </Stack>
  );
}
