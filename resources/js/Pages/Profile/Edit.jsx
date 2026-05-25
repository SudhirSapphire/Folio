import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import DeleteUserForm from './Partials/DeleteUserForm';
import UpdatePasswordForm from './Partials/UpdatePasswordForm';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm';
import { User, ShieldAlert, KeyRound } from 'lucide-react';

export default function Edit({ mustVerifyEmail, status }) {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold text-gray-900 dark:text-white tracking-tight">
                    Account Profile Settings
                </h2>
            }
        >
            <Head title="Account Settings" />

            <div className="py-8">
                <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
                    
                    {/* Profile Information Card */}
                    <div className="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl shadow-sm overflow-hidden">
                        <div className="p-6 border-b border-gray-100 dark:border-gray-800 bg-gray-50/50 dark:bg-gray-900/50 flex items-center gap-3">
                            <div className="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-950/40 text-indigo-600 dark:text-indigo-400 flex items-center justify-center">
                                <User className="w-5 h-5" />
                            </div>
                            <div>
                                <h3 className="text-base font-semibold text-gray-900 dark:text-white">Personal Identity</h3>
                                <p className="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                                    Manage your account public identity and verified email address.
                                </p>
                            </div>
                        </div>
                        <div className="p-6 md:p-8">
                            <UpdateProfileInformationForm
                                mustVerifyEmail={mustVerifyEmail}
                                status={status}
                                className="max-w-xl"
                            />
                        </div>
                    </div>

                    {/* Update Password Card */}
                    <div className="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl shadow-sm overflow-hidden">
                        <div className="p-6 border-b border-gray-100 dark:border-gray-800 bg-amber-50/50 dark:bg-amber-950/10 flex items-center gap-3">
                            <div className="w-10 h-10 rounded-xl bg-amber-50 dark:bg-amber-950/40 text-amber-600 dark:text-amber-400 flex items-center justify-center">
                                <KeyRound className="w-5 h-5" />
                            </div>
                            <div>
                                <h3 className="text-base font-semibold text-gray-900 dark:text-white">Credentials & Security</h3>
                                <p className="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                                    Ensure your account is using a long, random password to stay secure.
                                </p>
                            </div>
                        </div>
                        <div className="p-6 md:p-8">
                            <UpdatePasswordForm className="max-w-xl" />
                        </div>
                    </div>

                    {/* Delete Account Card */}
                    <div className="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl shadow-sm overflow-hidden">
                        <div className="p-6 border-b border-gray-100 dark:border-gray-800 bg-red-50/50 dark:bg-red-950/10 flex items-center gap-3">
                            <div className="w-10 h-10 rounded-xl bg-red-50 dark:bg-red-950/40 text-red-600 dark:text-red-400 flex items-center justify-center">
                                <ShieldAlert className="w-5 h-5" />
                            </div>
                            <div>
                                <h3 className="text-base font-semibold text-red-600 dark:text-red-400">Danger Zone</h3>
                                <p className="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                                    Permanently delete your account and all associated resource data.
                                </p>
                            </div>
                        </div>
                        <div className="p-6 md:p-8">
                            <DeleteUserForm className="max-w-xl" />
                        </div>
                    </div>

                </div>
            </div>
        </AuthenticatedLayout>
    );
}
