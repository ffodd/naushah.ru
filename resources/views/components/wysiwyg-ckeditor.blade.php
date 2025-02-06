<div class="main-container">
	<div class="editor-container editor-container_classic-editor editor-container_include-style editor-container_include-word-count" id="editor-container">
		<div class="editor-container__editor">
            <textarea name="content" id="editor">{{ $content }}</textarea>
        </div>
		<div class="editor_container__word-count" id="editor-word-count"></div>
	</div>
</div>

@push('style')
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css" crossorigin>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');

    @media print {
        body {
            margin: 0 !important;
        }
    }

    .main-container {
        font-family: 'Lato';
        width: full;
        margin-left: auto;
        margin-right: auto;
    }

    .ck-content {
        font-family: 'Lato';
        line-height: 1.6;
        word-break: break-word;
    }

    .editor-container_classic-editor .editor-container__editor {
        min-width: 795px;
    }

    .ck-content h3.category {
        font-family: 'Oswald';
        font-size: 20px;
        font-weight: bold;
        color: #555;
        letter-spacing: 10px;
        margin: 0;
        padding: 0;
    }

    .ck-content h2.document-title {
        font-family: 'Oswald';
        font-size: 50px;
        font-weight: bold;
        margin: 0;
        padding: 0;
        border: 0;
    }

    .ck-content h3.document-subtitle {
        font-family: 'Oswald';
        font-size: 20px;
        color: #555;
        margin: 0 0 1em;
        font-weight: bold;
        padding: 0;
    }

    .ck-content p.info-box {
        --background-size: 30px;
        --background-color: #e91e63;
        padding: 1.2em 2em;
        border: 1px solid var(--background-color);
        background: linear-gradient(
                135deg,
                var(--background-color) 0%,
                var(--background-color) var(--background-size),
                transparent var(--background-size)
            ),
            linear-gradient(
                135deg,
                transparent calc(100% - var(--background-size)),
                var(--background-color) calc(100% - var(--background-size)),
                var(--background-color)
            );
        border-radius: 10px;
        margin: 1.5em 2em;
        box-shadow: 5px 5px 0 #ffe6ef;
    }

    .ck-content blockquote.side-quote {
        font-family: 'Oswald';
        font-style: normal;
        float: right;
        width: 35%;
        position: relative;
        border: 0;
        overflow: visible;
        z-index: 1;
        margin-left: 1em;
    }

    .ck-content blockquote.side-quote::before {
        content: '“';
        position: absolute;
        top: -37px;
        left: -10px;
        display: block;
        font-size: 200px;
        color: #e7e7e7;
        z-index: -1;
        line-height: 1;
    }

    .ck-content blockquote.side-quote p {
        font-size: 2em;
        line-height: 1;
    }

    .ck-content blockquote.side-quote p:last-child:not(:first-child) {
        font-size: 1.3em;
        text-align: right;
        color: #555;
    }

    .ck-content span.marker {
        background: yellow;
    }

    .ck-content span.spoiler {
        background: #000;
        color: #000;
    }

    .ck-content span.spoiler:hover {
        background: #000;
        color: #fff;
    }

    .ck-content pre.fancy-code {
        border: 0;
        margin-left: 2em;
        margin-right: 2em;
        border-radius: 10px;
    }

    .ck-content pre.fancy-code::before {
        content: '';
        display: block;
        height: 13px;
        background: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1NCAxMyI+CiAgPGNpcmNsZSBjeD0iNi41IiBjeT0iNi41IiByPSI2LjUiIGZpbGw9IiNGMzZCNUMiLz4KICA8Y2lyY2xlIGN4PSIyNi41IiBjeT0iNi41IiByPSI2LjUiIGZpbGw9IiNGOUJFNEQiLz4KICA8Y2lyY2xlIGN4PSI0Ny41IiBjeT0iNi41IiByPSI2LjUiIGZpbGw9IiM1NkM0NTMiLz4KPC9zdmc+Cg==);
        margin-bottom: 8px;
        background-repeat: no-repeat;
    }

    .ck-content pre.fancy-code-dark {
        background: #272822;
        color: #fff;
        box-shadow: 5px 5px 0 #0000001f;
    }

    .ck-content pre.fancy-code-bright {
        background: #dddfe0;
        color: #000;
        box-shadow: 5px 5px 0 #b3b3b3;
    }

    .editor_container__word-count .ck-word-count {
        color: var(--ck-color-text);
        display: flex;
        height: 20px;
        gap: var(--ck-spacing-small);
        justify-content: flex-end;
        font-size: var(--ck-font-size-base);
        line-height: var(--ck-line-height-base);
        font-family: var(--ck-font-face);
        padding: var(--ck-spacing-small) var(--ck-spacing-standard);
    }

    .editor-container_include-word-count.editor-container_classic-editor .editor_container__word-count {
        border: 1px solid var(--ck-color-base-border);
        border-radius: var(--ck-border-radius);
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-top: none;
    }

    .editor-container_include-word-count.editor-container_classic-editor .editor-container__editor .ck-editor .ck-editor__editable {
        border-radius: 0;
    }
</style>
@endpush

<script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js" crossorigin></script>
<script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/translations/ru.umd.js" crossorigin></script>
<script type="module">
    const {
        ClassicEditor,
        Alignment,
        Autoformat,
        AutoImage,
        AutoLink,
        Autosave,
        Base64UploadAdapter,
        BlockQuote,
        Bold,
        Bookmark,
        CloudServices,
        Code,
        CodeBlock,
        Essentials,
        FindAndReplace,
        FontBackgroundColor,
        FontColor,
        FontFamily,
        FontSize,
        FullPage,
        GeneralHtmlSupport,
        Heading,
        Highlight,
        HorizontalLine,
        HtmlComment,
        HtmlEmbed,
        ImageBlock,
        ImageCaption,
        ImageInline,
        ImageInsert,
        ImageInsertViaUrl,
        ImageResize,
        ImageStyle,
        ImageTextAlternative,
        ImageToolbar,
        ImageUpload,
        Indent,
        IndentBlock,
        Italic,
        Link,
        LinkImage,
        List,
        ListProperties,
        Markdown,
        MediaEmbed,
        Paragraph,
        PasteFromOffice,
        RemoveFormat,
        ShowBlocks,
        SourceEditing,
        SpecialCharacters,
        SpecialCharactersArrows,
        SpecialCharactersCurrency,
        SpecialCharactersEssentials,
        SpecialCharactersLatin,
        SpecialCharactersMathematical,
        SpecialCharactersText,
        Strikethrough,
        Style,
        Subscript,
        Superscript,
        Table,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableProperties,
        TableToolbar,
        TextTransformation,
        Title,
        TodoList,
        Underline,
        WordCount
    } = window.CKEDITOR;

    const LICENSE_KEY =
        'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3Mzk0OTExOTksImp0aSI6ImVhNjRiYzljLTRhNWQtNDgyNS1iMTk1LTBjYzMyYzA2N2FiZSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjA1NzdmNGY2In0.q_db6J8nl_2sp4uiS57G57AK5pmZ0Fpm_M3cDrQNbY-ijtIWt2QjAov03r4qbN68Sz4CGrw3qrzJKCb4fm11OA';

    const editorConfig = {
        toolbar: {
            items: [
                'sourceEditing',
                'showBlocks',
                'findAndReplace',
                '|',
                'heading',
                'style',
                '|',
                'fontSize',
                'fontFamily',
                'fontColor',
                'fontBackgroundColor',
                '|',
                'bold',
                'italic',
                'underline',
                'strikethrough',
                'subscript',
                'superscript',
                'code',
                'removeFormat',
                '|',
                'specialCharacters',
                'horizontalLine',
                'link',
                'bookmark',
                'insertImage',
                'insertImageViaUrl',
                'mediaEmbed',
                'insertTable',
                'highlight',
                'blockQuote',
                'codeBlock',
                'htmlEmbed',
                '|',
                'alignment',
                '|',
                'bulletedList',
                'numberedList',
                'todoList',
                'outdent',
                'indent'
            ],
            shouldNotGroupWhenFull: true
        },
        plugins: [
            Alignment,
            Autoformat,
            AutoImage,
            AutoLink,
            Autosave,
            Base64UploadAdapter,
            BlockQuote,
            Bold,
            Bookmark,
            CloudServices,
            Code,
            CodeBlock,
            Essentials,
            FindAndReplace,
            FontBackgroundColor,
            FontColor,
            FontFamily,
            FontSize,
            FullPage,
            GeneralHtmlSupport,
            Heading,
            Highlight,
            HorizontalLine,
            HtmlComment,
            HtmlEmbed,
            ImageBlock,
            ImageCaption,
            ImageInline,
            ImageInsert,
            ImageInsertViaUrl,
            ImageResize,
            ImageStyle,
            ImageTextAlternative,
            ImageToolbar,
            ImageUpload,
            Indent,
            IndentBlock,
            Italic,
            Link,
            LinkImage,
            List,
            ListProperties,
            Markdown,
            MediaEmbed,
            Paragraph,
            PasteFromOffice,
            RemoveFormat,
            ShowBlocks,
            SourceEditing,
            SpecialCharacters,
            SpecialCharactersArrows,
            SpecialCharactersCurrency,
            SpecialCharactersEssentials,
            SpecialCharactersLatin,
            SpecialCharactersMathematical,
            SpecialCharactersText,
            Strikethrough,
            Style,
            Subscript,
            Superscript,
            Table,
            TableCaption,
            TableCellProperties,
            TableColumnResize,
            TableProperties,
            TableToolbar,
            TextTransformation,
            Title,
            TodoList,
            Underline,
            WordCount
        ],
        fontFamily: {
            supportAllValues: true
        },
        fontSize: {
            options: [10, 12, 14, 'default', 18, 20, 22],
            supportAllValues: true
        },
        heading: {
            options: [
                {
                    model: 'paragraph',
                    title: 'Paragraph',
                    class: 'ck-heading_paragraph'
                },
                {
                    model: 'heading1',
                    view: 'h1',
                    title: 'Heading 1',
                    class: 'ck-heading_heading1'
                },
                {
                    model: 'heading2',
                    view: 'h2',
                    title: 'Heading 2',
                    class: 'ck-heading_heading2'
                },
                {
                    model: 'heading3',
                    view: 'h3',
                    title: 'Heading 3',
                    class: 'ck-heading_heading3'
                },
                {
                    model: 'heading4',
                    view: 'h4',
                    title: 'Heading 4',
                    class: 'ck-heading_heading4'
                },
                {
                    model: 'heading5',
                    view: 'h5',
                    title: 'Heading 5',
                    class: 'ck-heading_heading5'
                },
                {
                    model: 'heading6',
                    view: 'h6',
                    title: 'Heading 6',
                    class: 'ck-heading_heading6'
                }
            ]
        },
        htmlSupport: {
            allow: [
                {
                    name: /^.*$/,
                    styles: true,
                    attributes: true,
                    classes: true
                }
            ]
        },
        image: {
            toolbar: [
                'toggleImageCaption',
                'imageTextAlternative',
                '|',
                'imageStyle:inline',
                'imageStyle:wrapText',
                'imageStyle:breakText',
                '|',
                'resizeImage'
            ]
        },
        //initialData: "",
        language: 'ru',
        licenseKey: LICENSE_KEY,
        link: {
            addTargetToExternalLinks: true,
            defaultProtocol: 'https://',
            decorators: {
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        menuBar: {
            isVisible: true
        },
        placeholder: 'Напишите или скопируйте содержимое статьи в данное поле',
        style: {
            definitions: [
                {
                    name: 'Article category',
                    element: 'h3',
                    classes: ['category']
                },
                {
                    name: 'Title',
                    element: 'h2',
                    classes: ['document-title']
                },
                {
                    name: 'Subtitle',
                    element: 'h3',
                    classes: ['document-subtitle']
                },
                {
                    name: 'Info box',
                    element: 'p',
                    classes: ['info-box']
                },
                {
                    name: 'Side quote',
                    element: 'blockquote',
                    classes: ['side-quote']
                },
                {
                    name: 'Marker',
                    element: 'span',
                    classes: ['marker']
                },
                {
                    name: 'Spoiler',
                    element: 'span',
                    classes: ['spoiler']
                },
                {
                    name: 'Code (dark)',
                    element: 'pre',
                    classes: ['fancy-code', 'fancy-code-dark']
                },
                {
                    name: 'Code (bright)',
                    element: 'pre',
                    classes: ['fancy-code', 'fancy-code-bright']
                }
            ]
        },
        table: {
            contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
        }
    };

    ClassicEditor.create(document.querySelector('#editor'), editorConfig).then(editor => {
        const wordCount = editor.plugins.get('WordCount');
        document.querySelector('#editor-word-count').appendChild(wordCount.wordCountContainer);

        document.querySelector('#editor-menu-bar').appendChild(editor.ui.view.menuBarView.element);

        return editor;
    });
</script>