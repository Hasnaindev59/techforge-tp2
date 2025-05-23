/********************************
Developer: Anonymous , Anonymous
Anonymous Anonymous, Anonymous
********************************/
import React from 'react';
import { createRoot } from 'react-dom/client';
import Sidebar from '../components/Sidebar'
import { MantineProvider, Flex, Stack, Title, Text, Button } from '@mantine/core';

import { theme } from '../mantine';
import Product from './Product';

function Order(props) {
  const invoice = JSON.parse(props.invoice)
  
  
  const transformDate = (pdate) => {
    const timestamp = pdate;
    const date = new Date(timestamp);
    const formattedDate = date.toLocaleDateString();
    
    return formattedDate;
  }
  return (
    <MantineProvider theme={theme}>
      <Flex className="justify-center items-center md:items-start md:justify-between my-20 md:m-24 relative flex-col-reverse md:flex-row">
	<Flex className="items-center justify-center w-full mt-5">
	  <Stack className="gap-40 flex-wrap justify-center mx-5">
	    
	    <Title order={2} className="text-center">Order Date: {transformDate(invoice.created_at)}</Title>
	    <Stack className="bg-white rounded-md p-10" gap="10">
	      <Flex gap="50" className="flex-col md:flex-row">
		<Stack gap="10">
		  <Title order={5}>Order Number:{invoice.invoice_id}</Title>
		  <Text order={6}>Order Status: {invoice.status.charAt(0).toUpperCase() + invoice.status.slice(1)}</Text>
		  <Text order={3}>Order Total: £{invoice.amount}</Text>
		</Stack>
		<Stack align="center" className="cursor-pointer">
		  <Text order={6}>Download Invoice</Text>
		  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-download"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
		</Stack>
		<Stack>
		  <Title order={3}>Shipping Address:</Title>
		  <p>Address:{invoice.address}</p>
		  <p>Postcode: {invoice.postcode}</p>
		</Stack>
	      </Flex>
	    </Stack>
	    <Title order={1}>Order Items:</Title>
	    {
	      invoice.invoice_orders.map((invoice_order, index) => (
		<Product key={index}
			 title={invoice_order.product.name}
			 img={invoice_order.product.image}
			 id={invoice_order.id}
			 quantity={invoice_order.quantity}
			 total={invoice_order.quantity * invoice_order.product.price}
			 unit_price={invoice_order.product.price}
		>
		  <Flex>
		    <Button variant="transparent">
		      <div  className="flex items-center relative hover:text-main-accent transition-color duration-300 before:content-[''] before:absolute before:h-[2px] before:w-full before:bottom-0 before:left-0 hover:before:right-0 before:bg-main-accent before:scale-x-0 before:transition-all before:ease-linear before:duration-300 hover:before:scale-x-100 capitalize text-inherit">
			Return
			<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  strokeWidth="2"  strokeLinecap="round"  strokeLinejoin="round"  className="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg>
		      </div>
		    </Button>
		    <Button variant="transparent" component='a' href={`/shop/product/${invoice_order.id}`} >
		      <div  className="flex items-center relative hover:text-main-accent transition-color duration-300 before:content-[''] before:absolute before:h-[2px] before:w-full before:bottom-0 before:left-0 hover:before:right-0 before:bg-main-accent before:scale-x-0 before:transition-all before:ease-linear before:duration-300 hover:before:scale-x-100 capitalize text-inherit">
			Rate
			<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  strokeWidth="2"  strokeLinecap="round"  strokeLinejoin="round"  className="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg>
		      </div>
		    </Button>
		    <Button variant="transparent" component='a' href={`/shop/product/${invoice_order.id}`} >
		      <div  className="flex items-center relative hover:text-main-accent transition-color duration-300 before:content-[''] before:absolute before:h-[2px] before:w-full before:bottom-0 before:left-0 hover:before:right-0 before:bg-main-accent before:scale-x-0 before:transition-all before:ease-linear before:duration-300 hover:before:scale-x-100 capitalize text-inherit">
			Order Again
			<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  strokeWidth="2"  strokeLinecap="round"  strokeLinejoin="round"  className="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg>
		      </div>
		    </Button>
		    
		  </Flex>
		</Product>
	      ))
	    }
	  </Stack>
	</Flex>
	<Sidebar />
      </Flex>
    </MantineProvider>
  )
}

export default Order;

const rootElement = document.getElementById('order')
const root = createRoot(rootElement);

root.render(<Order {...Object.assign({}, rootElement.dataset)} />);


