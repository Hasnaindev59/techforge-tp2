/********************************
Developer: Anonymous 
Anonymous Anonymous
********************************/
import React from 'react';
import { Title, Text, Stack } from '@mantine/core';

export default function Footer({ description }) {
  return (
    <Stack className="w-full" style={{ maxWidth: '800px', margin: '0 auto' }}>
      <Title>Description</Title>
      <Text>{description}</Text>
    </Stack>
  );
}
