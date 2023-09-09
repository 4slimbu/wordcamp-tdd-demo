//@ts-ignore
import { test, expect } from '@wordpress/e2e-test-utils-playwright';

test.describe('WordCamp TDD Demo', () => {
	test('It is activated', async ({ admin }) => {
		// Given
		await admin.visitAdminPage('plugins.php');

		// When
		const deactivateButton = await admin.page.$('[id="deactivate-wordcamp-tdd-demo"]');

		// Then
		expect(deactivateButton).not.toBeNull();
	});

	test('Tdd notice is displayed in the admin area', async ({ admin }) => {
		await admin.visitAdminPage('index.php');

		// Then
		const tddNotice = await admin.page.waitForSelector('body [data-testid="wctdd-notice"]');
		console.log('=-====', tddNotice);
		expect(tddNotice).not.toBeNull();

		// @ts-ignore
		const noticeText = await tddNotice.innerText();
		expect(noticeText).toContain("Let's go green with TDD");;
	});
});

