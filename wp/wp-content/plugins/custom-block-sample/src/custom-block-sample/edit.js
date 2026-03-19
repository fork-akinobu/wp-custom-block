/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { MediaUploadCheck, MediaUpload, useBlockProps } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
    const { imageUrl, imageAlt } = attributes;
    const blockProps = useBlockProps();

    return (
        <div { ...blockProps }>
            <MediaUploadCheck>
                <MediaUpload
                    onSelect={ ( media ) => setAttributes({
                        imageUrl: media.url,
                        imageAlt: media.alt
                    }) }
                    allowedTypes={ [ 'image' ] }
                    value={ imageUrl }
                    render={ ( { open } ) => (
                        <div>
                            { imageUrl ? (
                                <>
                                    <img src={ imageUrl } alt={ imageAlt } style={{ maxWidth: '100%' }} />
                                    <Button onClick={ open } variant="secondary">
                                        画像を変更
                                    </Button>
                                </>
                            ) : (
                                <Button onClick={ open } variant="primary">
                                    画像を選択
                                </Button>
                            ) }
                        </div>
                    ) }
                />
            </MediaUploadCheck>
        </div>
    );
}
