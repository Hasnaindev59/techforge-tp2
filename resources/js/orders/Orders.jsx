/********************************
Developer: Anonymous , Anonymous
Anonymous Anonymous, Anonymous
********************************/
import React from 'react';
import { createRoot } from 'react-dom/client';
import Order from '../dashboard/Order'
import Sidebar from '../components/Sidebar'
import { MantineProvider, Flex, Stack } from '@mantine/core';
import { theme } from '../mantine';

function Orders(props) {
	const invoices = JSON.parse(props.invoices);
	console.log(invoices)
	return (
		<MantineProvider theme={theme}>
			<Flex className="max-w-screen justify-center items-center my-10 md:justify-between relative flex-col-reverse md:flex-row">
				<Flex className="justify-center w-full my-12">
					<Stack className="gap-20 flex-wrap mx-5">
						{invoices.map((invoice, i) => (
							<Order
							key={invoice.invoice_id}
							name={`Invoice #${invoice.invoice_id}`}
							id={invoice.invoice_id}
							order_date={invoice.created_at}
							total={invoice.amount}
							invoice_orders={invoice.invoice_orders}
							/>
						))}

					</Stack>
				</Flex>
				<Sidebar />
			</Flex>
		</MantineProvider>
	)
}

export default Orders;

const rootElement = document.getElementById('orders')
const root = createRoot(rootElement);

root.render(<Orders {...Object.assign({}, rootElement.dataset)} />);


